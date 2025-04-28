<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\SubService;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubServiceController extends Controller
{
    public function index()
    {
        $subServices = SubService::with('service')->latest()->paginate(10);
        return view('admin.sub-services.index', compact('subServices'));
    }

    public function create()
    {
        $services = Service::all();
        return view('admin.sub-services.create', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/sub-services'), $filename);
            $imagePath = 'sub-services/' . $filename;
        }

        SubService::create([
            'service_id' => $request->service_id,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.sub-services.index')
            ->with('success', 'Sub-service created successfully.');
    }

    public function edit(SubService $subService)
    {
        $services = Service::all();
        return view('admin.sub-services.edit', compact('subService', 'services'));
    }

    public function update(Request $request, SubService $subService)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = [
            'service_id' => $request->service_id,
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            $oldImagePath = public_path($subService->image);
            if (file_exists($oldImagePath)) {
                unlink($oldImagePath);
            }

            $file = $request->file('image');
            $filename = Str::random(40) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('storage/sub-services'), $filename);
            $data['image'] = 'sub-services/' . $filename;
        }

        $subService->update($data);

        return redirect()->route('admin.sub-services.index')
            ->with('success', 'Sub-service updated successfully.');
    }

    public function destroy(SubService $subService)
    {
        $imagePath = public_path($subService->image);
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }

        $subService->delete();

        return redirect()->route('admin.sub-services.index')
            ->with('success', 'Sub-service deleted successfully.');
    }
}
