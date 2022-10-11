<?php

namespace App\Http\Livewire;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public $name,$email,$message;

    public function render()
    {
        return view('livewire.contact')->layout('layout.app');
    }

    public function save()
    {
        $contacts=new ModelsContact();
        $this->validate([
            'name'=>'required',
            'email'=>'required',
            'message'=>'required',
        ]);
        $contacts->name=$this->name;
        $contacts->email=$this->email;
        $contacts->message=$this->message;
        $result=$contacts->save();
        if($result){
            session()->flash('success','Admin will inform you');
            $this->name="";
            $this->email="";
            $this->message="";
        }
    }
}
