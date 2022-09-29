<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category as ModelsCategory;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class Category extends Component
{
    public $category_name,$image;
    public $edit_category_name,$edit_id,$old_image,$new_image;
    public function render()
    {
        $categories=ModelsCategory::orderBy('id','desc')->get();
        return view('livewire.admin.category',compact('categories'))->layout('layout.admin');
    }
    use WithFileUploads;
    public function save()
    {
        $category=new ModelsCategory();
        $this->validate([
            'category_name' => 'required|unique:categories,category_name',
            'image' => 'required',
        ]);
        $filename="";
        if($this->image){
            $filename=$this->image->store('categorys','public');
        }
        $category->category_name= $this->category_name;
        $category->image=$filename;
        $category->status=1;
        $category->slug=Str::slug($this->category_name);
        $result=$category->save();
        if($result){
            session()->flash('success','Category add Successfully');
        }
    }


    public function edit($id)
    {
        $category=ModelsCategory::findOrFail($id);
        $this->edit_category_name=$category->category_name;
        $this->edit_id=$category->id;
        $this->old_image=$category->image;
    }
    public function delete($id)
    {
        $result=ModelsCategory::findOrFail($id)->delete();
        if($result){
            session()->flash('success','Category delete Successfully');
        }
    }

    public function active($id)
    {
        $category=ModelsCategory::findOrFail($id);
        $category->status=1;
        $result=$category->save();
        if($result){
            session()->flash('success','Category add Successfully');
        }
    }
    public function inactive()
    {
        $category=ModelsCategory::findOrFail(4);
        $category->status=0;
        $result=$category->save();
        if($result){
            session()->flash('success','Category add Successfully');
        }
    }

    public function update($id)
    {
        $category=ModelsCategory::findOrFail($id);
        $this->validate([
            'edit_category_name' => 'required',
        ]);
        $filename="";
        if($this->new_image){
            $filename=$this->new_image->store('categorys','public');
        }else{
            $filename=$this->old_image;
        }
        $category->category_name= $this->edit_category_name;
        $category->image=$filename;
        $category->status=1;
        $category->slug=Str::slug($this->edit_category_name);
        $result=$category->save();
        if($result){
            session()->flash('success','Category add Successfully');
        }
    }

}
