<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
class PageController extends Controller
{
    public function index()
    {
    $pages = Page::all();
    return view('admin.page.index',compact('pages'));
    }

    public function create()
    {
        return view('admin.page.create');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'title'=>'required|string',
                'slug'=>'required|string',
                'content'=>'required|string',
                'status' => 'nullable|boolean',
                'menu_order' => 'nullable|integer|min:0',  // Validates that menu_order is an integer and optional (nullable)
            ]
            );
            Page::create([
                'title'=>$request->title,
                'slug'=>$request->slug,
                'content'=>$request->content,
                'status' =>$request->status ?? 1,
                'menu_order' =>$request->menu_order ?? 0,
            ]);
            return redirect()->route('admin.page.index')->with('success','Data inserted successfully');
    }

    public function edit(Page $page)
    {
        return view('admin.page.edit',compact('page'));
    }
    public function update(Request $request, Page $page)
    {
        $request->validate(
            [
                'title'=>'required|string',
                'slug'=>'required|string',
                'content'=>'required|string',
                'status' => 'nullable|boolean',
                'menu_order' => 'nullable|integer|min:0',  // Validates that menu_order is an integer and optional (nullable)
            ]
            );
            $page->update([
                'title'=>$request->title,
                'slug'=>$request->slug,
                'content'=>$request->content,
                'status' =>$request->status ?? 1,
                'menu_order' =>$request->menu_order ?? 0,
            ]);
            return redirect()->route('admin.page.index')->with('success','Data updated successfully');
    }
    public function destroy(About $about)
    {
        $about->delete();
        return redirect->route('admin.page.index')->with('success','Data deleted successfully');
    }
}
