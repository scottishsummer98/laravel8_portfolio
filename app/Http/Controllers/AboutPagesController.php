<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
class AboutPagesController extends Controller
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
    public function index()
    {
        $about = About::first();
        return view('pages.about',compact('about')); 
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'first_Name' => 'required|string',
            'last_Name' => 'required|string',
            'address' => 'required|string',
            'phone_number' => 'required|string',
            'email' => 'required|string',
            'short_description' => 'required|string',
        ]);

        $about = About::first();
        $about->first_Name = $request->first_Name;
        $about->last_Name = $request->last_Name;
        $about->address = $request->address;
        $about->phone_number = $request->phone_number;
        $about->email = $request->email;
        $about->short_description = $request->short_description;

        if($request->file('profile_picture')) {
            $img_file = $request->file('profile_picture');
            $img_file->storeAs('public/img/','profile_picture.' . $img_file->getClientOriginalExtension());
            $about->profile_picture = 'storage/img/profile_picture.' . $img_file->getClientOriginalExtension(); 
        }

        $about->save();

        return redirect()->route('admin.about')->with('success', "About Page Updated Successfully");
    }
}
