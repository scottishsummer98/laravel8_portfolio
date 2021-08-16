<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;

class EducationPagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $education = Education::all();
        return view('pages.education.list', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.education.create');
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
            'institution' => 'required|string',
            'qualification' => 'required|string',
            'concentration' => 'required|string',
            'result' => 'required|string',
            'timeframe' => 'required|string',
        ]);

        $education = new Education;
        $education->institution = $request->institution;
        $education->qualification = $request->qualification;
        $education->concentration = $request->concentration;
        $education->result = $request->result;
        $education->timeframe = $request->timeframe;

        $education->save();

        return redirect()->route('admin.education.create')->with('success', "New Education Added Successfully");
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
        $education = Education::find($id);
        return view('pages.education.edit', compact('education'));
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
            'institution' => 'required|string',
            'qualification' => 'required|string',
            'concentration' => 'required|string',
            'result' => 'required|string',
            'timeframe' => 'required|string',
        ]);

        $education = Education::find($id);
        $education->institution = $request->institution;
        $education->qualification = $request->qualification;
        $education->concentration = $request->concentration;
        $education->result = $request->result;
        $education->timeframe = $request->timeframe;

        $education->save();

        return redirect()->route('admin.education.list')->with('success', "New Education Updated Successfully");
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $education = Education::find($id);
        $education->delete();

        return redirect()->route('admin.education.list')->with('success', "Education Deleted Successfully");
    }
}
