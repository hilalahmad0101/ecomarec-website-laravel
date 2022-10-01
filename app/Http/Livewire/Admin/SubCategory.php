<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use App\Models\SubCategory as ModelsSubCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class SubCategory extends Component
{
    public $sub_category_name,$cat_id;
    public $edit_sub_category_name,$edit_id,$edit_cat_id;
    public function render()
    {
        $categorys=Category::orderBy('id','desc')->where('status',1)->get();
        $sub_categories=ModelsSubCategory::orderBy('id','desc')->get();
        return view('livewire.admin.sub-category',compact(['categorys','sub_categories']))->layout('layout.admin');
    }

    public function save()
    {
        $category=new ModelsSubCategory();
        $this->validate([
            'sub_category_name' => 'required|unique:categories,category_name',
            'cat_id' => 'required',
        ]);
        $category->sub_category_name= $this->sub_category_name;
        $category->status=1;
        $category->image="";
        $category->cat_id=$this->cat_id;
        $category->slug=Str::slug($this->sub_category_name);
        $result=$category->save();
        if($result){
            session()->flash('success','Sub Category add Successfully');
        }
    }

    public function edit($id)
    {
        $categorys=ModelsSubCategory::findOrFail($id);
        $this->edit_sub_category_name=$categorys->sub_category_name;
        $this->edit_id=$categorys->id;
        $this->edit_cat_id=$categorys->cat_id;
    }

    public function update($id)
    {
        $category=ModelsSubCategory::findOrFail($id);
        $this->validate([
            'edit_sub_category_name' => 'required|unique:categories,category_name',
            'edit_cat_id' => 'required',
        ]);
        $category->sub_category_name= $this->edit_sub_category_name;
        $category->status=1;
        $category->image="";
        $category->cat_id=$this->edit_cat_id;
        $category->slug=Str::slug($this->edit_sub_category_name);
        $result=$category->save();
        if($result){
            session()->flash('success','Sub Category Update Successfully');
        }
    }

    public function delete($id)
    {
        $result=ModelsSubCategory::findOrFail($id)->delete();
        if($result){
            session()->flash('success','Sub Category Delete Successfully');
        }
    }

    public function active($id)
    {
        $category=ModelsSubCategory::findOrFail($id);
        $category->status=1;
        $result=$category->save();
        if($result){
            session()->flash('success','Sub Category Active Successfully');
        }
    }
    public function inactive($id)
    {
        $category=ModelsSubCategory::findOrFail($id);
        $category->status=0;
        $result=$category->save();
        if($result){
            session()->flash('success','Sub Category inactive Successfully');
        }
    }
}
