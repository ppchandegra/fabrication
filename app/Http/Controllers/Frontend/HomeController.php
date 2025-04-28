<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $services = Service::where('status', true)->get();
        view()->share('services', $services);
    }

    public function index()
    {
        $services = Service::where('status', true)->take(6)->get();
        $galleries = Gallery::where('status', true)->take(8)->get();
        
        return view('frontend.home', compact('services', 'galleries'));
    }
} 