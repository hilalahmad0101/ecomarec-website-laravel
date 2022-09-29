<?php

namespace App\Http\Livewire\Admin;

use App\Models\SubCategory as ModelsSubCategory;
use Livewire\Component;
use Illuminate\Support\Str;

class SubCategory extends Component
{
    public function render()
    {
        return view('livewire.admin.sub-category')->layout('layout.admin');
    }

    public function save()
    {
        $category=new ModelsSubCategory();
        // $this->validate([
        //     'category_name' => 'required|unique:categories,category_name',
        //     'image' => 'required',
        // ]);
        $title='my category 1';
        $category->sub_category_name= $title;
        $category->image='';
        $category->status=1;
        $category->cat_id=1;
        $category->slug=Str::slug($title);
        $result=$category->save();
        dd($result);
    }


    public function delete()
    {
        $result=ModelsSubCategory::findOrFail(3)->delete();
        dd($result);
    }

    public function active()
    {
        $category=ModelsSubCategory::findOrFail(3);
        $category->status=1;
        $result=$category->save();
        dd($result);
    }
    public function inactive()
    {
        $category=ModelsSubCategory::findOrFail(4);
        $category->status=0;
        $result=$category->save();
        dd($result);
    }
}
