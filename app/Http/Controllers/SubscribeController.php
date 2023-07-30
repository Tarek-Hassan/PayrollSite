<?php

namespace App\Http\Controllers;

use App\Models\Subscribe;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    
    public function __invoke(Request $request)
    {
       
        Subscribe::create($request->all());
        return redirect()->back();
    }
}
