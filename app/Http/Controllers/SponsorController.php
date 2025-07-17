<?php

namespace App\Http\Controllers;

use App\Models\Sponsor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class SponsorController extends Controller
{
    public function index()
    {
        $sponsors = Sponsor::latest()->get();
        return view('pages.admin.sponsors.index', compact('sponsors'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'images' => 'required|array',
            'images.*' => 'image|max:2048',
        ]);


        foreach ($request->file('images') as $image) {
            $path = $image->store('sponsors', 'public');

            Sponsor::create([
                'image' => $path,
            ]);
        }

        return redirect()->route('sponsors.index')->with('success', 'Sponsors added successfully!');
    }

    public function update(Request $request, Sponsor $sponsor)
    {
        if ($request->hasFile('image')) {
            $request->validate(['image' => 'image|max:2048']);
            Storage::disk('public')->delete($sponsor->image);
            $path = $request->file('image')->store('sponsors', 'public');
            $sponsor->update(['image' => $path]);
        }

        return redirect()->route('sponsors.index')->with('success', 'Sponsor updated!');
    }

    public function destroy(Sponsor $sponsor)
    {
        Storage::disk('public')->delete($sponsor->image);
        $sponsor->delete();
        return back()->with('success', 'Sponsor deleted!');
    }
}
