<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::with('subServices')->where('status', true)->get();
        $galleries = Gallery::where('status', true)->latest()->take(6)->get();
        return view('frontend.home', compact('services', 'galleries'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function services()
    {
        $services = Service::with('subServices')->where('status', true)->get();
        return view('frontend.services', compact('services'));
    }

    public function serviceDetail(Service $service)
    {
        return view('frontend.service-detail', compact('service'));
    }

    public function gallery()
    {
        $galleries = Gallery::where('status', true)->latest()->get();
        return view('frontend.gallery', compact('galleries'));
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function policy()
    {
        return view('frontend.policy');
    }
} 