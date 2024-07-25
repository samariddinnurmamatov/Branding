<?php

namespace App\Http\Controllers;

use App\Models\Call;
use Illuminate\Http\Request;

class CallController extends Controller
{
    public function customerContact(Request $request){
        $request->validate([
            'full_name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'phone_number' => 'nullable|string',
        ]);

        Call::create($request->all());
        return redirect()->back()->with('success', "Habar Yuborildi!");
    }
    public function index()
    {
        $calls = Call::all();
        return view('admin.calls.index', compact('calls'));
    }

    public function create()
    {
        return view('front.contacts');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'phone_number' => 'nullable|string',
        ]);

        Call::create($request->all());
        return redirect()->back();
    }

    public function edit(Call $call)
    {
        return view('admin.calls.edit', compact('call'));
    }

    public function update(Request $request, Call $call)
    {
        $request->validate([
            'full_name' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'phone_number' => 'nullable|string',
        ]);

        $call->update($request->all());
        return redirect()->route('calls.index');
    }

    public function destroy(Call $call)
    {
        $call->delete();
        return redirect()->back();
    }
}
