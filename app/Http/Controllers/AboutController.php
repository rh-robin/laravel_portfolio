<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use illuminate\Support\Carbon;

class AboutController extends Controller
{
    public function edit(){
        $about = About::first();
        return view("backend.about.index",compact("about"));
    }

    public function update(Request $request){
        $validateData = $request->validate([
            "image" => "mimes:jpeg,png,jpg,gif|max:500000",
            "name" => "required",
            "email" => "required|email",
            "hire_link" => "url",
        ]);

        $image = $request->file('image');

        if($image){
            $img_ext = $image->getClientOriginalExtension();
            $img_name = hexdec(uniqid()).'.'.$img_ext;
            $up_location = "image/";
            $imageNameForDb = $up_location.$img_name;
            $image->move($up_location,$img_name);

            $old_image = $request->old_image;
            unlink($old_image);
            About::first()->update([
                "title" => $request->title,
                "description" => $request->description,
                "name" => $request->name,
                "birthday" => $request->birthday,
                "degree" => $request->degree,
                "experience" => $request->experience,
                "phone" => $request->phone,
                "email" => $request->email,
                "address" => $request->address,
                "freelance" => $request->freelance,
                "image" => $imageNameForDb,
                "hire_link" => $request->hire_link,
                "updated_at" => Carbon::now()
            ]);
            return redirect()->route('about.edit')->with("success","Updated successfully");
        }else{
            About::first()->update([
                "title" => $request->title,
                "description" => $request->description,
                "name" => $request->name,
                "birthday" => $request->birthday,
                "degree" => $request->degree,
                "experience" => $request->experience,
                "phone" => $request->phone,
                "email" => $request->email,
                "address" => $request->address,
                "freelance" => $request->freelance,
                "hire_link" => $request->hire_link,
                "updated_at" => Carbon::now()
            ]);
            return redirect()->route('about.edit')->with("success","Updated successfully");
        }
        
    }
}
