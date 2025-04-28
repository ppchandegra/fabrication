<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact');
    }

    public function store(Request $request)
    {
            // dd($request->all());
          
        Contact::create($request->all());
    
        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your message. We will contact you soon!');
    }
    
    
    
} 