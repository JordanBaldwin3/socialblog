<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() 
    {
        $users = User::all();
        return view('admin')->with('users', $users);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/admin')->with('success', 'User successfully deleted!');
        
        //
    }

    public function makeAdmin($id)
    {
        $user = User::find($id);
        $user->admin = '1';
        $user->push();
        return redirect('/admin')->with('success', 'User successfully Upgraded!');
    }

    public function takeAdmin($id)
    {
        $user = User::find($id);
        $user->admin = '0';
        $user->push();
        return redirect('/admin')->with('success', 'User successfully Upgraded!');
    }
}
