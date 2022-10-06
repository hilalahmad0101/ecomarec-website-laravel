<?php

namespace App\Http\Livewire\Admin;

use App\Models\Slider as ModelsSlider;
use Illuminate\Support\Facades\File;
use Livewire\Component;
use Livewire\WithFileUploads;

class Slider extends Component
{
    public $image;
    public $old_image, $new_image, $edit_id;
    public $update = false;
    use WithFileUploads;
    public function render()
    {
        $sliders = ModelsSlider::orderBy('id', 'desc')->get();
        return view('livewire.admin.slider', compact('sliders'))->layout('layout.admin');
    }

    public function save()
    {
        $sliders = new ModelsSlider();
        $this->validate([
            'image' => 'required'
        ]);
        $filename = "";
        if ($this->image) {
            $filename = $this->image->store('slider', 'public');
        }
        $sliders->image = $filename;
        $result = $sliders->save();
        if ($result) {
            session()->has('success', 'Slider Add Successfully');
            $this->image = "";
        }
    }

    public function edit($id)
    {
        $this->update = true;
        $sliders = ModelsSlider::findOrFail($id);

        $this->old_image = $sliders->image;
        $this->edit_id = $sliders->id;
    }
    public function update()
    {
        $sliders = ModelsSlider::findOrFail($this->edit_id);
       
        $filename = "";
        if ($this->new_image) {
            $destination = public_path('storage\\' . $sliders->image);
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $filename = $this->new_image->store('slider', 'public');
        } else {
            $filename = $this->old_image;
        }
        $sliders->image = $filename;
        $result = $sliders->save();
        if ($result) {
            session()->has('success', 'Slider Update Successfully');
            $this->new_image = "";
            $this->old_image = "";
            $this->update = false;
        }
    }

    public function delete($id)
    {
        $sliders = ModelsSlider::findOrFail($id);
        $destination = public_path('storage\\' . $sliders->image);
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $result = $sliders->delete();
        if ($result) {
            session()->has('success', 'Slider Delete Successfully');
        }
    }
}
