<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\preservation;
use Illuminate\Http\Request;

class PreservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preservations = Preservation::all();
        return view('admin.preservation.index')->with('preservations',$preservations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.preservation.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'nullable|string',
            'image'=>'required|image',
        ]);
         // Store the uploaded image
         $path = $request->file('image')->store('preservation', 'public');
         Preservation::create([
            'title'=>$request->title,
            'image'=>$path,
            'description' => $request->description ?? '',

         ]);
         return redirect()->route('admin.preservation.index')->with('success','data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(preservation $preservation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(preservation $preservation)
    {
        return view('admin.preservation.edit',compact('preservation'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, preservation $preservation)
    {
        $request->validate([
            'title'=>'nullable|string',
            'image'=>'nullable|image',
        ]);
          // If there's a new image, store it and update the slider's image
          if ($request->hasFile('image')) {
            $path = $request->file('image')->store('preservation', 'public');
            $preservation->update(['image' => $path]);
        }
        $preservation->update([
            'title'=>$request->title,
        ]);
        return redirect()->route('admin.preservation.index')->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(preservation $preservation)
    {
        $preservation->delete();
        return redirect()->route('admin.preservation.index')->with('success','data deleted successfully');
    }
}
