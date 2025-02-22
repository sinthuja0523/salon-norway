<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\controllers\AppointController;
use App\Http\controllers\AboutController;
use App\Http\controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/', function () {
    return view('pages.abouts');
});

Route::get('/', function () {
    return view('pages.services');
});

Route::get('/', function () {
    return view('pages.contacts');
});




//Route::get('pages.aboutus' ,[AboutController::class , 'aboutus']);

Route::get('/appoint' , [AppointController::class,'appoint']);
Route::get('/create', [AppointController::class,'create']);
Route::post('/create', [AppointController::class,'store']);




Route::get('SendEmail' , [MailController::class , 'SendEmail']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

route::get('/home' , [HomeController::class,'index'])->middleware('auth')->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
