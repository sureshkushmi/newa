<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
            'title'=>'required|string',
            'description'=>'required|string',
            'image'=>'required|image',
                ]);
    
            // Store the uploaded image
            $path = $request->file('image')->store('about', 'public');
            About::create(
                [
                    'title'=>$request->title,
                    'slogan'=>$request->slogan,
                    'image'=>$path,
                    'message'=>$request->description,
                
                ]
                );
                return redirect()->route('admin.about.index')->with('success','Data inserted successfully');
    }
    /**
     * Display the specified resource.
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
       return view('admin.about.edit',compact('about'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title'=>'nullable|string|max:255',
            'slogan'=>'nullable|string|max:255',
            'image'=>'nullable|image',
            'description'=>'nullable|string',
           ]);
           // If there's a new image, store it and update the slider's image
           if ($request->hasFile('image')) {
            $path = $request->file('image')->store('about', 'public');
            $about->update(['image' => $path]);
        }
    
        $about->update([
            'title'=>$request->title,
            'slogan'=>$request->slogan,
            'description'=>$request->description,
        ]);
        return redirect()->route('admin.about.index')->with('success','About Us edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('admin.about.index')->with('success','Data deleted successfully');
    }
}
