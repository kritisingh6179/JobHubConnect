 <?php

use App\Http\Controllers\JobListingController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;

use Illuminate\Support\Facades\Route;



Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

// Login routes
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);

// Profile (Home) page
Route::get('/profile', [PagesController::class, 'index'])->name('index');

// Logout route
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/hiring', [JobListingController::class, 'jobindex'])->name('jobindex');
Route::resource('job', JobListingController::class);
Route::get('/companies', [PagesController::class,'companies']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/contact', [PagesController::class,'contact']);
