<?php

namespace App\Http\Livewire\User\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;
use PDO;

class Dashboard extends Component
{
    public $first_name, $last_name, $email, $username, $mobile_number, $address, $new_image, $image, $gender;

    use WithFileUploads;

    public function mount()
    {
        $users = User::findOrFail(Auth::user()->id);

        $this->first_name = $users->first_name;
        $this->last_name = $users->last_name;
        $this->email = $users->email;
        $this->username = $users->username;
        $this->mobile_number = $users->mobile_number;
        $this->address = $users->address;
        $this->image = $users->image;
        $this->gender = $users->gender;
    }
    public function render()
    {
        return view('livewire.user.auth.dashboard')->layout('layout.app');
    }

    public function updateProfile()
    {
        $users = User::findOrFail(Auth::user()->id);
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'username' => 'required',
            'address' => 'required',
        ]);
        $filename="";
        if($this->new_image){
            $destination =public_path('storage\\'.$this->image);
            if(File::exists($destination)){
                File::delete($destination);
            }
            $filename=$this->new_image->store('users','public');
        }else{
            $filename=$this->image;
        }
        $users->first_name = $this->first_name;
        $users->last_name = $this->last_name;
        $users->email = $this->email;
        $users->username = $this->username;
        $users->mobile_number = $this->mobile_number;
        $users->address = $this->address;
        $users->image =$filename;
        $users->gender = $this->gender;
        $result=$users->save();
        if($result){
            session()->flash('success','Profile Update Successfully');
        }else{
            session()->flash('success','Some problem Please Try again');

        }
    }
}
