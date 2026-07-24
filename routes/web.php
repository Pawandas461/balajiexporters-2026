<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/services', [FrontController::class, 'services'])->name('services');
Route::get('/products', [FrontController::class, 'listing'])->name('listing');
Route::get('/contact-us', [FrontController::class, 'contact'])->name('contact');
Route::post('/contact-us', [FrontController::class, 'contactPost'])->name('contactPost');
Route::post('/whatsapp', [FrontController::class, 'whatsapp'])->name('whatsapp');

Route::get('/blogs/{slug?}', [FrontController::class, 'getBlogs'])->name('getBlogs');

Route::get('/about-us', [FrontController::class, 'about'])->name('about');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq');
Route::get('/terms-and-conditions', [FrontController::class, 'terms'])->name('terms');
Route::get('/privacy-policy', [FrontController::class, 'privacy'])->name('privacy');
Route::get('/delivery-and-returns', [FrontController::class, 'refund'])->name('refund');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});
Route::prefix('admin')->middleware(['auth', "can:isSuperadmin", "log.admin"])->group(function () {
    Route::get('/customers', [UserController::class, 'customers'])->name('customers');
    Route::resource('users', UserController::class)->except(['destroy']);
});
Route::prefix('admin')->middleware(['auth', "can:isAdminIsSuperadmin", "log.admin"])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('blogs', BlogController::class)->except(['show']);
    Route::delete('/blog-pic/{id}', [BlogController::class, 'deleteBlogImage'])->name('deleteBlogImage');
    Route::resource('enquiries', EnquiryController::class)->except(['create', 'store']);
    Route::get('/activity-logs', [\App\Http\Controllers\ActivityLogController::class, 'index'])->name('activityLogs.index');
});

require __DIR__ . '/auth.php';