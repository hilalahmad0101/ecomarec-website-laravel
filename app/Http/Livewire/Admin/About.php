<?php

namespace App\Http\Livewire\Admin;

use App\Models\About as ModelsAbout;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class About extends Component
{
    public $title,$image,$para;
    public $edit_title,$old_image,$new_image,$edit_para;
    public $edit_id;
    public $update=false;
    public $abouts;

    use WithFileUploads;
    public function render()
    {
        $this->abouts=ModelsAbout::latest()->get();
        return view('livewire.admin.about')->layout('layout.admin');
    }



    public function delete($id)
    {
        $abouts=ModelsAbout::findOrFail($id);
        $destination=public_path('storage\\'.$abouts->image);
        if(File::exists($destination)){
            File::delete($destination);
        }

        if($abouts->delete()){
            session()->flash('success','About Delete Successfully');
        }
    }
}