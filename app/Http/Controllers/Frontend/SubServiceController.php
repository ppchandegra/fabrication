<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SubService;
use Illuminate\Http\Request;

class SubServiceController extends Controller
{
    public function show($id)
    {
        $subService = SubService::with('service')->findOrFail($id);
        return view('frontend.sub-service-detail', compact('subService'));
    }
} 