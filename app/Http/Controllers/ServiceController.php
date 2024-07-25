<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->paginate(10);
        return view('admin.service.index', compact('services'));
    }

    public function create()
    {
        $portfolios = Portfolio::all();
        return view('admin.service.create', compact('portfolios'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_uz' => 'nullable|string|max:255',
            'title_ru' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'portfolio_ids' => 'nullable|array',
            'portfolio_ids.*' => 'exists:portfolios,id',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post_photo');
        }

        $service = Service::create($data);

        if (!empty($validated['portfolio_ids'])) {
            $service->portfolios()->attach($validated['portfolio_ids']);
        }

        return redirect()->route('services.index')->with('success', 'Service created successfully.');
    }

    public function show(Service $service)
    {
        return view('admin.service.show', compact('service'));
    }

    public function edit(Service $service)
    {
        $portfolios = Portfolio::all();
        return view('admin.service.edit', compact('service', 'portfolios'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'title_uz' => 'nullable|string|max:255',
            'title_ru' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'portfolio_ids' => 'nullable|array',
            'portfolio_ids.*' => 'exists:portfolios,id',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            if ($service->image) {
                Storage::delete($service->image);
            }
            $data['image'] = $request->file('image')->store('post_photo');
        }

        $service->update($data);

        if (!empty($validated['portfolio_ids'])) {
            $service->portfolios()->sync($validated['portfolio_ids']);
        } else {
            $service->portfolios()->detach();
        }

        return redirect()->route('services.index')->with('success', 'Service updated successfully.');
    }

    public function destroy(Service $service)
    {
        if ($service->image) {
            Storage::delete($service->image);
        }

        $service->delete();

        return redirect()->back();
    }
}
