<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PoetryShairiController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Models\PoetryShairi;
use App\Models\Project;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Shafqat-Dev Portfolio
|--------------------------------------------------------------------------
*/

// 1. Frontend Routes (Duniya ke liye)
Route::get('/', function () {
    $projects = Project::latest()->take(9)->get();
    $shairi = PoetryShairi::latest()->take(6)->get();

    return view('home', [
        'projects' => $projects,
        'shairi' => $shairi,
        'projectsCount' => Project::count(),
        'poetryCount' => PoetryShairi::count(),
    ]);
})->name('home');

Route::post('/contact', [MessageController::class, 'store'])->name('contact.store');


// 2. Authentication Routes (Login & Register)
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.submit');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');


// 3. Admin Protected Routes (Sirf Login ke baad chalenge)
Route::middleware(['web', 'auth'])->group(function () {
    
    // Dashboard
    Route::get('/admin', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Projects Management
    Route::resource('/admin/projects', ProjectController::class)
          ->names('admin.projects')
          ->except(['show']);

    // Poetry Management
    Route::resource('/admin/poetry', PoetryShairiController::class)
          ->names('admin.poetry')
          ->except(['show']);

    // Messages Management
    Route::resource('/admin/messages', MessageController::class)
          ->names('admin.messages')
          ->only(['index', 'destroy']);
});
