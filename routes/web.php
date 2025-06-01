<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\admin\SettingsController;
use App\Http\Controllers\admin\TestimonialController;
use App\Http\Controllers\BookingController;

use App\Models\Menu;
use App\Models\Testimonial;



Route::get('/', function () {

    $items = Menu::all();
    $testimonials = Testimonial::all();

    return view('frontend.home', compact('items', 'testimonials'));
})->name('home');

Route::get('/admin/bookings', function () {
    $bookings = \App\Models\Booking::latest()->get();
    return view('admin.bookings', compact('bookings'));
});



Route::get('/about-us', function () {
    return view('frontend.about');
})->name('about');

Route::get('/menu', function () {
    $items = Menu::all();


    return view('frontend.menu', compact('items'));
})->name('menu');

Route::get('/contact-us', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::controller('admin.SliderController::class')->group(function () {
//     Route::get('/SliderIndex', 'Index')->name('slider.index');
//     route::post('/saveSlider', 'storeslider')->name('slider.store');
//     Route::post('/updateSlider', 'updateslider')->name('slider.update');
//     Route::get('/deleteSlider{id}', 'deleteslider')->name('slider.delete');
// });

Route::controller(SliderController::class)->group(function () {
    Route::get('/SliderIndex', 'index')->name('slider.index');
    Route::post('/saveSlider', 'storeSlider')->name('slider.store');
    Route::post('/updateSlider', 'updateSlider')->name('slider.update');
    Route::get('/deleteSlider/{id}', 'deleteSlider')->name('slider.delete');
});

Route::controller(MenuController::class)->group(function () {
    Route::get('/MenuIndex', 'index')->name('menu.index');
    Route::post('/saveMenu', 'store')->name('menu.store');
    Route::get('/deleteMenu/{id}', 'deleteMenu')->name('menu.delete');
    Route::post('/updateMenu', [MenuController::class, 'updateMenu'])->name('menu.update');
});


// Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
//     Route::resource('menus', MenuController::class);
// });

Route::controller(TestimonialController::class)->group(function () {
    Route::get('/TestimonialIndex', 'index')->name('Testimonial.index');
    Route::post('/saveTestimonial', 'storeTestimonial')->name('Testimonial.store');
    Route::post('/updateTestimonial', 'updateTestimonial')->name('Testimonial.update');
    Route::get('/deleteTestimonial/{id}', 'deleteTestimonial')->name('Testimonial.delete');
});

// Route::controller(SettingsController::class)->group(function () {
//     Route::get('/settings', 'index')->name('settings.index');
//     Route::post('/settingsUpdate', 'update')->name('settings.update');
// });

// Route::post('/book-table', [BookingController::class, 'store'])->name('bookings.store');
// Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');

Route::controller(BookingController::class)->group(function () {
    Route::get('/bookings', 'index')->name('bookings.index');
    Route::post('/bookings', 'store')->name('bookings.store');
    Route::post('/booking', 'accept')->name('bookings.accept');
    Route::post('/booking/reject', 'reject')->name('bookings.reject');
});

require __DIR__ . '/auth.php';
