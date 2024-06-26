<?php

use App\Http\Controllers\CoverageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
});
Route::get('/mobile-tyre-fitting', function () {
    return Inertia::render('MobileTyreFitting');
});
Route::get('/mobile-tyre-repair', function () {
    return Inertia::render('MobileTyreRepair');
});
Route::get('/van-mobile-tyre-fitting', function () {
    return Inertia::render('VanMobileTyreFitting');
});
Route::get('/about', function () {
    return Inertia::render('About');
});
Route::get('/contact', function () {
    return Inertia::render('Contact');
});
Route::get('/privacy', function () {
    return Inertia::render('Privacy');
});
Route::get('/sitemap', function () {
    $coverage = config('towns');

    return Inertia::render('Sitemap', [
        'coverage' => $coverage
    ]);
});

Route::get('/coverage/{town}', [CoverageController::class, 'show']);
