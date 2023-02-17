<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=app('App\Http\Controllers\ProjectTypeController')->index();
        return view('createProject',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createProject');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'Pname' => 'required',
            'Plocation' => 'required',
            'Pupdates' => 'required',
            'Ptype'=> 'required'
        ]);
       
        $Construction = project::create($data);
        return redirect(url('createProject'))->with('message', 'item added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        $data=project::get();
        return view('viewProjectData',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        $data=app('App\Http\Controllers\ProjectTypeController')->index();
        return view('editProject', compact('project','data'));
    }
   

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        $data = $request->validate([
            'Pname' => 'required',
            'Plocation' => 'required',
            'Pupdates' => 'required',
            'Ptype'=> 'required'
        ]);
       
        $project->update($data);
        return redirect(url('view-project'))->with('message', 'item added successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        $project->delete();
        return redirect(url('view-project'))->with('message', 'item deleted successfully');

    }
}
