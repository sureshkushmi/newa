<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        // Fetch all sliders and pass them to the view
        $sliders = Slider::latest()->get();
        return view('admin.slider.index', compact('sliders'));
    }

    public function create()
    {
        // Show the form to create a new slider
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        // Validate incoming request data
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|image',
            'description' => 'nullable|string',
        ]);

        // Store the uploaded image
        $path = $request->file('image')->store('sliders', 'public');

        // Create a new slider record in the database
        Slider::create([
            'title' => $request->title,
            'image' => $path,
            'description' => $request->description,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('admin.slider.index')->with('success', 'Slider added successfully');
    }

    public function edit(Slider $slider)
    {
        // Show the form to edit the existing slider
        return view('admin.slider.edit', compact('slider'));
    }

    public function update(Request $request, Slider $slider)
    {
        // Validate incoming request data
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image',
            'description' => 'nullable|string',
        ]);

        // If there's a new image, store it and update the slider's image
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('sliders', 'public');
            $slider->update(['image' => $path]);
        }

        // Update the title and description
        $slider->update([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('admin.slider.index')->with('success', 'Slider updated successfully');
    }

    public function destroy(Slider $slider)
    {
        // Delete the slider from the database
        $slider->delete();
        // Redirect to the index page with a success message
        return redirect()->route('admin.slider.index')->with('success', 'Slider deleted successfully');
    }
}
