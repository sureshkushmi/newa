<?php

namespace App\Http\Controllers\Admin;

use App\Models\preservation;
use Illuminate\Http\Request;

class PreservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preservation = Preservation::all();
        return view('admin.preservation.index')->with('preservation',$preservation);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, preservation $preservation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(preservation $preservation)
    {
        //
    }
}
