<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivityController;
use App\Models\Activity;
use App\Http\Controllers\NewActController;
use App\Models\NewAct;
use App\Http\Controllers\ActPhotoController;
use App\Models\ActPhoto;
use App\Http\Controllers\DevotionController;
use App\Models\Devotion;
use App\Http\Controllers\GerejaController;
use App\Models\Gereja;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', function () {
    $activities = Activity::orderBy('created_at', 'desc')->take(1)->get();
    return view('home',  ['activities' => $activities]);
});

/*Route::get('/karya', function () {
    $activities = Activity::all();
    return view('karya',  ['activities' => $activities]);
});*/

Route::resource('berita', ActivityController::class);

Route::get('/activities/home', function () {
    $activities = Activity::all();
    return view('home',  ['activities' => $activities]);
});

Route::get('/activities/berita', function () {
    $activities = Activity::all();
    return view('berita',  ['activities' => $activities]);
});
Route::get('/kolekta', [GerejaController::class,'index'])->name('gereja.kolekta');

Route::get('activities/kolekta', [GerejaController::class,'index'])->name('gereja.kolekta');
Route::get('/edit', [GerejaController::class,'edit'])->name('gereja.edit');

Route::get('/sakramen', function () {
    return view('sakramen');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/batas', function () {
    return view('batas');
});
Route::get('/pastur', function () {
    return view('pastur');
});
Route::get('/gereja/kolekta', function () {
    return view('gereja/kolekta');
});



Route::get('/sekretariat', function () {
    return view('sekretariat');
});

Route::resource('activities', ActivityController::class);
Route::resource('aktivitas', NewActController::class);
Route::resource('newacts', NewActController::class);
Route::resource('photoacts', ActPhotoController::class);

Route::resource('renungan', DevotionController::class);
Route::resource('devotions', DevotionController::class);
Route::resource('gerejas', GerejaController::class);
Route::resource('uas_tes', GerejaController::class);