<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\MenuController;

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/about-us', function () {
    return view('frontend.about');
})->name('about');

Route::get('/menu', function () {
    return view('frontend.menu');
})->name('menu');

Route::get('/contact-us', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

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
    Route::post('/saveMenu', 'storeMenu')->name('menu.store');
    Route::post('/updateMenu', 'updateMenu')->name('menu.update');
    Route::get('/deleteMenu/{id}', 'deleteMenu')->name('menu.delete');
});

// Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
//     Route::resource('menus', MenuController::class);
// });


require __DIR__ . '/auth.php';
