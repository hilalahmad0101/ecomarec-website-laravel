<?php

namespace App\Http\Controllers\User\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request, $pro_id, $owner_id)
    {
        try {
            $is_cart = Cart::where(['user_id' => auth()->id(), 'pro_id' => $pro_id])->first();
            $product = Product::findOrFail($pro_id);
            if ($is_cart) {
                return response()->json([
                    "success" => false,
                    "message" => 'Product Already in Cart',
                ]);
            } else {
                $carts = new Cart();
                $carts->qty = $request->qty;
                $carts->pro_id = $pro_id;
                $carts->owner_id = $owner_id;
                $carts->user_id = auth()->id();
                $carts->total_price = $request->qty * $product->price;
                $result = $carts->save();
                if ($result) {
                    return response()->json([
                        "success" => true,
                        "message" => 'Product Add Cart Successfully',
                    ]);
                } else {
                    return response()->json([
                        "success" => false,
                        "message" => 'Some Problem Occurs',
                    ]);
                }
            }
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => $th->getMessage(),
            ]);
        }
    }

    public function totalCount()
    {
        try {
            $carts = Cart::where(['user_id' => auth()->id(),])->get();
            $total = 0;
            foreach ($carts as $cart) {
                $total += $cart->qty;
            }
            return response()->json([
                "success" => true,
                "total_count" => $total,
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => $th->getMessage(),
            ]);
        }
    }

    public function updateCart(Request $request, $id)
    {
        try {
            $carts = Cart::findOrFail($id);
            $total_qty = $carts->qty + $request->qty;
            $carts->qty = $total_qty;
            $carts->total_price = $carts->products->price * $total_qty;
            $result = $carts->save();
            if ($result) {
                return response()->json([
                    "success" => true,
                    "message" => 'Cart Update Successfully',
                ]);
            } else {
                return response()->json([
                    "success" => false,
                    "message" => 'Some Problem Occurs',
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => $th->getMessage(),
            ]);
        }
    }

    public function deleteCart($id)
    {
        try {
            $carts = Cart::findOrFail($id)->delete();
            if($carts){
                return response()->json([
                    "success" => true,
                    "message" => 'Cart Delete Successfully',
                ]);
            }
        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => $th->getMessage(),
            ]);
        }
    }
}
