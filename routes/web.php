<?php

use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminServiceController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Language switcher
Route::get('/lang/{locale}', [LocaleController::class, 'switch'])->name('locale.switch');

// Public pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/{service}', [ServiceController::class, 'show'])->name('services.show');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/projets', [ProjectController::class, 'index'])->name('projects');
Route::get('/projets/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'storeContact'])->name('contact.store');
Route::get('/brochure/download', [PageController::class, 'downloadBrochure'])->name('brochure.download');

// Blog routes
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{article}', [BlogController::class, 'show'])->name('blog.show');

// Newsletter subscription
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Admin dashboard routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::prefix('dashboard')->name('admin.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Projects management
        Route::resource('projects', AdminProjectController::class)->except(['show']);
        Route::post('projects/{project}/toggle-publish', [AdminProjectController::class, 'togglePublish'])->name('projects.toggle-publish');

        // Services management
        Route::resource('services', AdminServiceController::class)->except(['show']);
        Route::post('services/{service}/toggle-publish', [AdminServiceController::class, 'togglePublish'])->name('services.toggle-publish');
        Route::post('services/reorder', [AdminServiceController::class, 'reorder'])->name('services.reorder');

        // Articles management
        Route::resource('articles', AdminArticleController::class)->except(['show']);
        Route::post('articles/{article}/toggle-publish', [AdminArticleController::class, 'togglePublish'])->name('articles.toggle-publish');

        // Profile management
        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});

Route::middleware('auth')->group(function () {
    // Legacy profile routes (kept for compatibility)
    Route::get('/profile', function () {
        return redirect()->route('admin.profile.edit');
    });
});

require __DIR__.'/auth.php';
