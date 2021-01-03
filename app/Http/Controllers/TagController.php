<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Session;
use Illuminate\Http\Request;

class TagController extends Controller
{

    public function index() 
    {
        $tag = Tag::all();
        return view('tags')->with('tags', $tag);
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
            'name'=>'required|unique:tags',
        ]);
        
        $tag = new Tag();
        $tag->name = $request->input('name');
        $tag->save();

        //Session::flash('success', 'Tag successfully created!');

        return redirect('tags');
        //
    }
    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        return redirect('tags')->with('success', 'User successfully deleted!');
        
        //
    }
}
