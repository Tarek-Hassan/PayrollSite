<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Subscribe;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function __invoke()
    {
        // $about = About::first();
        // return view('layouts.aboutUs',compact('about'));
        return view('layouts.aboutUs');
    }
}
