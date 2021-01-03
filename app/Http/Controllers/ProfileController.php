<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Image;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->profile) {
            return redirect('home'); 
        }
        return view('profiles.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bio'=>'required',
        ]);
        
        $profile = new Profile();
        $profile->user_id = $request->user()->id;
        $profile->bio = $request->input('bio');

        $profile->save();

        if ($request->hasFile('image')) {
            //$request->image->getClientOriginalName();
            $image = new Image();
            $image->filename = time().'.'.$request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $image->filename);
            $profile->image()->save($image);
            
        }
    
        //$profile->save();

        return redirect('/home')->with('success', 'Post successfully created!');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profile = Profile::find($id);
        return view('profiles.profile')->with('profile',$profile);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
