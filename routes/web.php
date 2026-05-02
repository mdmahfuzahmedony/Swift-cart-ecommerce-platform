<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\DiscountController; // এটি উপরে ইমপোর্ট করুন

// --- ১. পাবলিক পেজসমূহ (সবাই দেখতে পাবে) ---
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/shop', 'shop')->name('shop');
Route::view('/blog', 'blog')->name('blog');
Route::view('/contact', 'contact')->name('contact');

// --- ২. ইনফরমেশন পেজসমূহ ---
Route::view('/privacy-policy', 'privacy')->name('privacy');
Route::view('/terms-conditions', 'terms')->name('terms');
Route::view('/return-policy', 'return-policy')->name('return');
Route::view('/faq', 'faq')->name('faq');
Route::view('/support-center', 'support')->name('support');

// --- ৩. ক্যাটাগরি অনুযায়ী শপ ফিল্টার ---
Route::get('/shop/{category}', [ProductController::class, 'category'])->name('shop.category');

// --- ৪. গুগল লগইন রাউটসমূহ ---
Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

// --- ৫. কাস্টমার প্রোফাইল (Breeze) ---
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/');

    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- ৬. এডমিন প্যানেল রাউটসমূহ (সুরক্ষিত) ---

// --- ৬. এডমিন প্যানেল রাউটসমূহ (সুরক্ষিত) ---
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/orders', [AdminController::class, 'orders'])->name('orders');
    Route::get('/products', [AdminController::class, 'products'])->name('products');
    Route::get('/customers', [AdminController::class, 'customers'])->name('customers');
    Route::get('/reports', [AdminController::class, 'reports'])->name('reports');
    Route::get('/discounts', [AdminController::class, 'discounts'])->name('discounts');
    Route::get('/integrations', [AdminController::class, 'integrations'])->name('integrations');
    Route::get('/settings', [AdminController::class, 'settings'])->name('settings');
    Route::get('/products/create', [AdminController::class, 'createProduct'])->name('products.create');
    Route::get('/orders/create', [OrderController::class, 'create'])->name('orders.create');
Route::get('/discounts/create', [DiscountController::class, 'create'])->name('discounts.create');
}); // এখানে এডমিন গ্রুপ শেষ

// --- ৭. সাধারণ ইউজারদের জন্য রাউটসমূহ (এডমিন গ্রুপের বাইরে রাখুন) ---
Route::get('/cart', function () { return view('cart'); })->name('cart');
Route::get('/wishlist', function () { return view('wishlist'); })->name('wishlist');
Route::get('/shop', function () { return view('shop'); })->name('shop');
Route::get('/checkout', function () { return view('checkout'); })->name('checkout');


require __DIR__.'/auth.php';