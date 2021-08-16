<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;

class ExperiencePagesController extends Controller
{
    /**
     * Create a new controller instance.
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $experience = Experience::all();
        return view('pages.experience.list', compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.experience.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'designation' => 'required|string',
            'company' => 'required|string',
            'timeframe' => 'required|string',
            'summary' => 'required|string',
        ]);

        $experience = new Experience;
        $experience->designation = $request->designation;
        $experience->company = $request->company;
        $experience->timeframe = $request->timeframe;
        $experience->summary = $request->summary;

        $experience->save();

        return redirect()->route('admin.experience.create')->with('success', "New Experience Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $experience = Experience::find($id);
        return view('pages.experience.edit', compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'designation' => 'required|string',
            'company' => 'required|string',
            'timeframe' => 'required|string',
            'summary' => 'required|string',
        ]);

        $experience = Experience::find($id);
        $experience->designation = $request->designation;
        $experience->company = $request->company;
        $experience->timeframe = $request->timeframe;
        $experience->summary = $request->summary;

        $experience->save();

        return redirect()->route('admin.experience.list')->with('success', "New Experience Updated Successfully");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = Experience::find($id);
        $experience->delete();

        return redirect()->route('admin.experience.list')->with('success', "Experience Deleted Successfully");
    }
}
