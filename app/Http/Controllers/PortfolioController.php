<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolios = Portfolio::latest()->paginate(10);
        return view('admin.portfolio.index', compact('portfolios'));
    }

    public function create()
    {
        $services = Service::all();
        return view('admin.portfolio.create', compact('services'));
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'service_ids' => 'nullable|array',
            'service_ids.*' => 'exists:services,id',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post_photo');
        }
        if ($request->hasFile('image1')) {
            $data['image1'] = $request->file('image1')->store('post_photo');
        }
        if ($request->hasFile('image2')) {
            $data['image2'] = $request->file('image2')->store('post_photo');
        }

        $portfolio = Portfolio::create($data);

        if (!empty($validated['service_ids'])) {
            $portfolio->services()->attach($validated['service_ids']);
        }

        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully.');
    }

    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolio.show', compact('portfolio'));
    }

    public function edit(Portfolio $portfolio)
    {
        $service = Service::all();
        return view('admin.portfolio.edit', compact('portfolio', 'service'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $validated = $request->validate([
            'title_uz' => 'nullable|string|max:255',
            'title_ru' => 'nullable|string|max:255',
            'title_en' => 'nullable|string|max:255',
            'description_uz' => 'nullable|string',
            'description_ru' => 'nullable|string',
            'description_en' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'service_ids' => 'nullable|array',
            'service_ids.*' => 'exists:services,id',
        ]);

        $data = $validated;

        if ($request->hasFile('image')) {
            if ($portfolio->image) {
                Storage::delete($portfolio->image);
            }
            $data['image'] = $request->file('image')->store('post_photo');
        }
        if ($request->hasFile('image1')) {
            if ($portfolio->image1) {
                Storage::delete($portfolio->image1);
            }
            $data['image1'] = $request->file('image1')->store('post_photo');
        }
        if ($request->hasFile('image2')) {
            if ($portfolio->image2) {
                Storage::delete($portfolio->image2);
            }
            $data['image2'] = $request->file('image2')->store('post_photo');
        }

        $portfolio->update($data);

        if (!empty($validated['service_ids'])) {
            $portfolio->services()->sync($validated['service_ids']);
        } else {
            $portfolio->services()->detach();
        }

        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->image) {
            Storage::delete($portfolio->image);
        }
        if ($portfolio->image1) {
            Storage::delete($portfolio->image1);
        }
        if ($portfolio->image2) {
            Storage::delete($portfolio->image2);
        }

        $portfolio->delete();

        return redirect()->back();
    }
}
