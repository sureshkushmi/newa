<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::paginate(10);
        return view('admin.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form input
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'message' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'rating' => 'required|numeric|min:1|max:5',
        'status' => 'required|in:active,inactive',
    ]);

    // Handle image upload
    $path = null;
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('testimonials', 'public');
    }

    $status = ($request->status == 'active') ? 1 : 0;

Testimonial::create([
    'name' => $request->name,
    'designation' => $request->designation,
    'company' => $request->company,
    'message' => $request->message,
    'image' => $path,
    'rating' => $request->rating,
    'status' => $status,
    'created_at' => now(),
    'updated_at' => now(),
]);

    return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testimonial $testimonial)
    {
    return view('admin.testimonial.edit',compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
                    // Validate form input
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'designation' => 'nullable|string|max:255',
        'company' => 'nullable|string|max:255',
        'message' => 'nullable|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        'rating' => 'required|numeric|min:1|max:5',
        'status' => 'required|in:active,inactive',
    ]);

    // Handle image upload
    $path = null;
   // If there's a new image, store it and update the slider's image
   if ($request->hasFile('image')) {
    $path = $request->file('image')->store('testimonial', 'public');
    $slider->update(['image' => $path]);
    }

    $status = ($request->status == 'active') ? 1 : 0;

    $testimonial->update([
    'name' => $request->name,
    'designation' => $request->designation,
    'company' => $request->company,
    'message' => $request->message,
    'image' => $path,
    'rating' => $request->rating,
    'status' => $status,
    'created_at' => now(),
    'updated_at' => now(),
    ]);

    return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial updated successfully!');
         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('admin.testimonial.index')->with('success','testimonial deleted successfully');
    }
}
