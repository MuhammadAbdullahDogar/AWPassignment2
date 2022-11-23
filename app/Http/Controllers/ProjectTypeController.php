<?php

namespace App\Http\Controllers;

use App\Models\projectType;
use Illuminate\Http\Request;

class ProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=projectType::get();
        // return view('viewData',compact('data'));
        return $data;

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name' =>'required'
        ]);
      
        $Construction=projectType::create($data);
        return redirect(url('company'))->with('message', 'item added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function show(projectType $projectType)
    {
        $data=projectType::get();
        return view('viewData',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function edit(projectType $projectType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projectType $projectType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projectType  $projectType
     * @return \Illuminate\Http\Response
     */
    public function destroy(projectType $projectType)
    {
        //
    }
}
