<?php
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

// Old Routes
Route::get('/', function () {
    //return view('home');
    Route::get('/', [HomeController::class, 'index']);
});

Route::get('about', function () {
    return view('pages.about');
});

Route::get('members', function () {
    return view('pages.members');
});

Route::get('programmes', function () {
    return view('pages.programmes');
});

Route::get('gallery', function () {
    return view('pages.gallery');
});

Route::view('/contact', 'pages.contact')->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
Route::view('/donate', 'pages.donate')->name('donate');
Route::post('/donate', [DonationController::class, 'submit'])->name('donate.submit');

// Dashboard Routes (Breeze)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    // Resource route for slider
    Route::resource('slider', SliderController::class);
    Route::resource('slogan', SloganController::class);
    Route::resource('about',AboutController::class);
    Route::resource('feature',FeatureController::class);
    Route::resource('preservation',PreservationController::class);
    Route::resource('testimonial',TestimonialController::class);
});

// Breeze authentication routes
require __DIR__.'/auth.php';
