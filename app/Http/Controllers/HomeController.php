<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Models\PartenerReview;

class HomeController extends Controller
{
    
    public function __invoke()
    {
        $settings = Setting::first();
        $services = Service::where('is_published',true)->get(['id','title_en','title_ar']);
        $partenerReviews = PartenerReview::where('is_published',true)->get(['id','name_en','name_ar','postion_en','postion_ar','review_en','review_ar','rate']);
        return view('layouts.home',compact('settings','services', 'partenerReviews'));
    }
}
