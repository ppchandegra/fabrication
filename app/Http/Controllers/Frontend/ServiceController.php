<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('status', true)->get();
        return view('frontend.services', compact('services'));
    }

    public function show($id)
    {
        $service = Service::with('subServices')->findOrFail($id);
        $relatedServices = Service::where('status', true)
            ->where('id', '!=', $id)
            ->take(3)
            ->get();
            
        return view('frontend.service-detail', compact('service', 'relatedServices'));
    }
} 