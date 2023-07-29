<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{

    public function __invoke($name){
        if (! in_array($name, ['en', 'ar'])) {abort(404);}
        App::setLocale($name);
        Session::put('locale', $name );
        return redirect()->back();
    }
}
