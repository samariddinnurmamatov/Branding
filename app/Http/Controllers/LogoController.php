<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $logos = Logo::latest()->paginate(10);
        return view('admin.logo.index', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.logo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post_photo');
        }
        Logo::create($data);

        return redirect()->route('logos.index')->with('success', 'Logo created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function edit(Logo $logo)
    {
        return view('admin.logo.edit', compact('logo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logo $logo)
    {
        // Validate the request
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            if ($logo->image) {
                Storage::delete($logo->image);
            }
            $data['image'] = $request->file('image')->store('post_photo');
        }

        // Update the database record with the new paths
        $logo->update($data);

        return redirect()->route('logos.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logo $logo)
    {
        if ($logo->image) {
            Storage::delete($logo->image);
        }

        $logo->delete();

        return redirect()->back();
    }
}
