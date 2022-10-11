<?php

namespace App\Http\Livewire;

use App\Models\About as ModelsAbout;
use Livewire\Component;

class About extends Component
{
    public $abouts;
    public function render()
    {
        $this->abouts=ModelsAbout::latest()->limit(1)->first();
        return view('livewire.about')->layout('layout.app');
    }
}
