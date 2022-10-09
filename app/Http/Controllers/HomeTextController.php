<?php

namespace App\Http\Controllers;

use App\Models\HomeText;
use Illuminate\Http\Request;
use illuminate\Support\Carbon;

class HomeTextController extends Controller
{
    public function edit(){
        $hometext = HomeText::first();
        return view("backend.home.home_text.index",compact("hometext"));
    }

    public function update(Request $request){
        $validateData = $request->validate([
            "image" => "mimes:jpeg,png,jpg,gif",
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
            HomeText::first()->update([
                "short_title" => $request->short_title,
                "main_title" => $request->main_title,
                "designations" => $request->designations,
                "image" => $imageNameForDb,
                "updated_at" => Carbon::now()
            ]);
            return redirect()->route('hometexts.edit')->with("success","Updated successfully");
        }else{
            HomeText::first()->update([
                "short_title" => $request->short_title,
                "main_title" => $request->main_title,
                "designations" => $request->designations,
                "updated_at" => Carbon::now()
            ]);
            return redirect()->back()->with("success","Updated successfully");
        }
        
    }
}
