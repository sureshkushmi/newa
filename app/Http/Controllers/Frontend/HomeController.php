<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\Slogan;
use App\Models\About;
use App\Models\Feature;
use App\Models\Preservation;
use App\Models\Testimonial;
// Add more models if needed

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'sliders' => Slider::where('status', 1)->get(),
            'slogan' => Slogan::first(),
            'about' => About::first(),
            'features' => Feature::latest()->take(3)->get(),
            'preservations' => Preservation::latest()->take(6)->get(),
            'testimonials' => Testimonial::where('status', 1)->get(),
        ]);
    }
}
