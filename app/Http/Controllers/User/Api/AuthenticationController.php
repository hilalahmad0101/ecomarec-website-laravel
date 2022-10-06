<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Twilio\Rest\Client;

class AuthenticationController extends Controller
{
    public function create(Request $request)
    {
        try {

            $users = new User();
            $validation = Validator::make($request->all(), [
                'mobile_number' => ['required', 'numeric', 'unique:users,mobile_number'],
            ]);
            if ($validation->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validation->errors()->all(),
                ]);
            } else {
                $rand = rand(999999, 100000);

                $account_sid = getenv("TWILIO_SID");
                $auth_token = getenv("TWILIO_AUTH_TOKEN");
                $twilio_number = getenv("TWILIO_NUMBER");
                $client = new Client($account_sid, $auth_token);
                $message = $client->messages->create($request->mobile_number, ['from' => $twilio_number, 'body' => 'Otp send Send ' . $rand]);
                if ($message->sid) {
                    $users->mobile_number = $request->mobile_number;
                    $users->first_name = " ";
                    $users->last_name = " ";
                    $users->email = " ";
                    $users->password = " ";
                    $users->username = " ";
                    $users->otp = $rand;
                    $result = $users->save();
                    if ($result) {
                        return response()->json([
                            'success' => true,
                            'message' => 'Otp Send on mobile device',
                        ]);
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Server Problem',
                        ]);
                    }
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Otp Not send',
                    ]);
                }
            }
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ]);
        }
    }

    public function verifyOtp(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'otp' => ['required'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required'],
            ]);
            if ($validation->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validation->errors()->all(),
                ]);
            } else {
                $users = User::where('mobile_number', $request->mobile_number)->first();
                if ($users) {
                    if ($users->otp == $request->otp) {
                        $email  = $request->email;
                        $username = strstr($email, '@', true);
                        $users->first_name = " ";
                        $users->last_name = " ";
                        $users->email = $request->email;
                        $users->password = Hash::make($request->password);
                        $users->username = $username;
                        $users->verified = 1;
                        $result = $users->save();
                        if ($result) {
                            return response()->json([
                                'success' => true,
                                'message' => 'Account Create Successfully',
                            ]);
                        } else {
                            return response()->json([
                                'success' => false,
                                'message' => 'Server Problem',
                            ]);
                        }
                    } else {
                        return response()->json([
                            'success' => false,
                            'message' => 'Invalid otp',
                        ]);
                    }
                } else {
                    return response()->json([
                        'success' => false,
                        'message' => 'Invalid Mobile number',
                    ]);
                }
            }
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ]);
        }
    }

    public function login(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'email_phone' => ['required'],
                'password' => ['required'],
            ]);
            if ($validation->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => $validation->errors()->all(),
                ]);
            } else {
                $users = User::where('email', $request->email_phone)->orWhere('mobile_number', $request->email_phone)->first();
                if (!$users) {
                    return response()->json([
                        'success' => false,
                        'message' => 'Invalid email or mobile number and password',
                    ]);
                } else {
                    if (!Hash::check($request->password, $users->password)) {
                        return response()->json([
                            'success' => false,
                            'message' => 'Invalid email or mobile number and password',
                        ]);
                    } else {
                        $token = $users->createToken('token')->plainTextToken;
                        return response()->json([
                            'success' => true,
                            'token' => $token,
                            'message' => 'Login Successfully',
                        ]);
                    }
                }
            }
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ]);
        }
    }

    public function getUser(Request $request)
    {
        try {
            $users = $request->user();
            if ($users) {
                return response()->json([
                    'success' => true,
                    'users' => $users,
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'message' => $th->getMessage(),
            ]);
        }
    }
}
