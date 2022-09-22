<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class Home extends Component
{
    public $categories;
    public function render()
    {
        $this->categories=Category::orderBy('id','desc')->where('status',1)->get();
        return view('livewire.home')->layout('layout.app');
    }
}
