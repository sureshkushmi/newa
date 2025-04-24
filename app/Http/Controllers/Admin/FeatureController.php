<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feature  =  Feature::all();
        return view('admin.feature.index', compact('feature'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.feature.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string',
            'description'=>'required|string'
        ]);
        Feature::create([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        return redirect()->route('admin.feature.index')->with('success','Data inserted successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Feature $feature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feature $feature)
    {
       return view('admin.feature.edit',compact('feature'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feature $feature)
    {
        $request->validate([
            'title'=>'nullable|string',
            'description'=>'nullable|string',
        ]);
        $feature->update([
            'title'=>$request->title,
            'description'=>$request->description,
        ]);
        return redirect()->route('admin.feature.index')->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feature $feature)
    {
        $feature->delete();
        return redirect()->route('admin.feature.index')->with('success','data deleted successfully');
    }
}
