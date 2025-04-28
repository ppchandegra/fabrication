<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::where('status', true)->get();
        return view('frontend.gallery', compact('galleries'));
    }

    public function show(Gallery $gallery)
    {
        if (!$gallery->status) {
            abort(404);
        }
        return view('frontend.gallery-detail', compact('gallery'));
    }
} 