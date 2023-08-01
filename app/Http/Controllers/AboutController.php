<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    
    public function __invoke()
    {
        return view('layouts.aboutUs');
    }
}
