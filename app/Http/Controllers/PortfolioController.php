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
        // Requestdan ma'lumotlarni olish
        $data = $request->all();

        // Faylni tekshirish va saqlash
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('post_photo');
        }
        if ($request->hasFile('image1')) {
            $data['image1'] = $request->file('image1')->store('post_photo');
        }
        if ($request->hasFile('image2')) {
            $data['image2'] = $request->file('image2')->store('post_photo');
        }

        // Portfolio yaratish
        $portfolio = Portfolio::create($data);

        // Xizmatlarni qo'shish
        if (!empty($request->input('service_ids'))) {
            $portfolio->services()->attach($request->input('service_ids'));
        }

        return redirect()->route('portfolios.index')->with('success', 'Portfolio created successfully.');
    }

    public function show(Portfolio $portfolio)
    {
        return view('admin.portfolio.show', compact('portfolio'));
    }

    public function edit(Portfolio $portfolio)
    {
        $services = Service::all();
        return view('admin.portfolio.edit', compact('portfolio', 'services'));
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        // Requestdan ma'lumotlarni olish
        $data = $request->all();

        // Faylni tekshirish va saqlash
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

        // Portfolio yangilash
        $portfolio->update($data);

        // Xizmatlarni yangilash
        if (!empty($request->input('service_ids'))) {
            $portfolio->services()->sync($request->input('service_ids'));
        } else {
            $portfolio->services()->detach();
        }

        return redirect()->route('portfolios.index')->with('success', 'Portfolio updated successfully.');
    }

    public function destroy(Portfolio $portfolio)
    {
        // Fayllarni o'chirish
        if ($portfolio->image) {
            Storage::delete($portfolio->image);
        }
        if ($portfolio->image1) {
            Storage::delete($portfolio->image1);
        }
        if ($portfolio->image2) {
            Storage::delete($portfolio->image2);
        }

        // Portfolio o'chirish
        $portfolio->delete();

        return redirect()->back();
    }
}
