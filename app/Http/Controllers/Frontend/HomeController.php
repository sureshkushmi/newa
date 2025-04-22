<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use App\Models\About;
use App\Models\Destination;
use App\Models\Testimonial;
// Add more models if needed

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home', [
            'sliders' => Slider::where('status', 1)->get(),
            'about' => About::first(),
            'destinations' => Destination::where('status', 1)->get(),
            'testimonials' => Testimonial::where('status', 1)->get(),
        ]);
    }
}
