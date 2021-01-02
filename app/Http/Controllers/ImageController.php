<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function store(Request $request) {
        $image = new Image();
        $image->filename = $request->filename->store('public');
    }
}
