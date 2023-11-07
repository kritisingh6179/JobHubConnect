 <?php

use App\Http\Controllers\JobListingController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PagesController;

use Illuminate\Support\Facades\Route;


// Registration Routes
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

// Login routes
Route::get('/', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/', [UserController::class, 'login']);

 // Protected Routes (Authenticated Users)
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [PagesController::class, 'index'])->name('profile');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/hiring', [JobListingController::class, 'jobindex'])->name('jobindex');
Route::resource('job', JobListingController::class);
Route::get('/companies', [PagesController::class,'companies']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/contact', [PagesController::class,'contact']);
});

