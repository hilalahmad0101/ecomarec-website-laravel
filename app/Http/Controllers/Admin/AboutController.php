<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts= About::latest()->get();
    }

    public function show()
    {
        return view('admins.about.add-about');
    }

    public function save(Request $request)
    {

        $abouts=new About();
        $request->validate([
            'title'=>'required',
            'image' => 'required',
            'para'=>'required',
        ]);
        $filename="";
        if($request->image){
            $filename=$request->image->store('abouts', 'public');
        }

        $abouts->title=$request->title;
        $abouts->image=$filename;
        $abouts->para=$request->para;
        $result=$abouts->save();
        if($result){
            session()->flash('success','About add Successfully');
            $request->image="";
            $request->title="";
        }
    }

    public function edit($id)
    {
        $abouts= About::findOrFail($id);
        return view('admins.about.edit-about',compact('abouts'));
    }

    public function update(Request $request,$id)
    {
        $abouts= About::findOrFail($id);
        $request->validate([
            'title'=>'required',
            'para'=>'required',
        ]);

        $filename="";
        if($request->new_image){
            $filename=$request->new_image->store('abouts', 'public');
        }else{
            $filename=$request->old_image;
        }

        $abouts->title=$request->title;
        $abouts->para=$request->para;
        $abouts->image=$filename;
        $result=$abouts->save();
        if($result){
            session()->flash('success','About Update Successfully');
            $request->new_image="";
            $request->title="";
            $request->update=false;
            return redirect(route('admin.about'));
        }
    }

}
