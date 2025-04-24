<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slogan;
use Illuminate\Http\Request;

class SloganController extends Controller
{
    public function index()
    {
        // Fetch all sliders and pass them to the view
        $slogans = Slogan::latest()->get();
        return view('admin.slogan.index', compact('slogans'));
    }

    public function create()
    {
        // Show the form to create a new slider
        return view('admin.slogan.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'title' => 'string|max:255',
        ]);
        // Create a new slider record in the database
        Slogan::create([
            'title' => $request->title,
             ]);

        
        // Redirect to the index page with a success message
        return redirect()->route('admin.slogan.index')->with('success', 'Slogan added successfully');
    }

    public function edit(Slogan $slogan)
    {
        // Show the form to edit the existing slider
        return view('admin.slogan.edit', compact('slogan'));
    }

    public function update(Request $request, Slogan $slogan)
    {
        // Validate incoming request data
        $request->validate([
            'title' => 'string|max:255',
            ]);

        $slogan->update([
            'title' => $request->title,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('admin.slogan.index')->with('success', 'Slogan updated successfully');
    }

    public function destroy(Slogan $slogan)
    {
        // Delete the slider from the database
        $slogan->delete();
        // Redirect to the index page with a success message
        return redirect()->route('admin.slogan.index')->with('success', 'Slogan deleted successfully');
    }
}
