<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;


class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $educations = Education::all();

        return view('backend.educations.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.educations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Education $educations)
    {
        $validateData = $request->validate([
            "degree" => "required",
            "institute" => "required"
        ]);
        $educations->fill($request->all())->save();
        return redirect()->route('educations.index',)->with("success","Resource Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $education = Education::query()->findOrFail($id); 
        return view('backend.educations.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            "degree" => "required",
            "institute" => "required"
        ]);
        $education = Education::query()->findOrFail($id); 
        $education->fill($request->all())->save();
        
        return redirect()->route('educations.edit',['education'=>$education->id])->with("success","Resource Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Education::findOrFail($id)->delete();
        
        return redirect()->route('educations.index')->with("success","Resource Deleted Successfully");
    }
}
