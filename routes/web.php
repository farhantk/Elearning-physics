<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\authController;
use App\Http\Controllers\studyController;
use App\Http\Controllers\countController;
use Illuminate\Support\Facades\Route;


Route::get('/', [studyController::class, 'landing'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('landing');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//require __DIR__.'/auth.php';

Route::get('/masuk', [authController::class, 'signin'])
    ->middleware(['guest'])
    ->name('login');
Route::post('/masuk', [authController::class, 'action_signin']);
Route::get('/daftar', [authController::class, 'signup']);
Route::post('/daftar', [authController::class, 'action_signup']);
Route::post('/signout', [authController::class, 'action_signout']);


Route::get('/fisika', [studyController::class, 'index'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('main');

Route::get('/fisika/suhu-dan-kalor/glosarium', [studyController::class, 'glosarium'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('glosarium');
Route::get('/fisika/suhu-dan-kalor/daftarpustaka', [studyController::class, 'daftarpustaka'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('daftarpustaka');

Route::get('/fisika/suhu-dan-kalor/suhu/skala-suhu', [studyController::class, 'skalasuhu'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('skalasuhu');
Route::get('/fisika/suhu-dan-kalor/suhu/termometer', [studyController::class, 'termometer'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('termometer');
Route::get('/fisika/suhu-dan-kalor/suhu/contohsoal', [studyController::class, 'contohsoalsuhu'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('contohsoalsuhu');
Route::get('/fisika/suhu-dan-kalor/suhu/quiz', [studyController::class, 'quizsuhu'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('quizsuhu');
Route::post('/fisika/suhu-dan-kalor/suhu/quiz', [studyController::class, 'quizsuhusubmit']);
    
Route::get('/fisika/suhu-dan-kalor/kalor/pengaruh-kalor-pada-zat', [studyController::class, 'pengaruhkalorpadazat'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('pengaruhkalorpadazat');
Route::get('/fisika/suhu-dan-kalor/kalor/pengaruh-kalor-pada-zat/contohsoal', [studyController::class, 'contohsoalkalor1'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('contohsoalkalor1');
Route::get('/fisika/suhu-dan-kalor/kalor/pengaruh-kalor-pada-zat/quiz', [studyController::class, 'quizkalor1'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('quizkalor1');
Route::post('/fisika/suhu-dan-kalor/kalor/pengaruh-kalor-pada-zat/quiz', [studyController::class, 'quizkalor1submit']);

Route::get('/fisika/suhu-dan-kalor/kalor/pemuaian-zat', [studyController::class, 'pemuaianzat'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('pemuaianzat');
Route::get('/fisika/suhu-dan-kalor/kalor/pemuaian-zat/contohsoal', [studyController::class, 'contohsoalpemuaianzat'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('contohsoalpemuaianzat');

Route::get('/fisika/suhu-dan-kalor/kalor/pemuaian-zat/quiz', [studyController::class, 'quizkalor2'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('quizkalor2');
Route::post('/fisika/suhu-dan-kalor/kalor/pemuaian-zat/quiz', [studyController::class, 'quizkalor2submit']);

Route::get('/fisika/suhu-dan-kalor/kalor/perpindahan-kalor', [studyController::class, 'perpindahankalor'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('perpindahankalor');
Route::get('/fisika/suhu-dan-kalor/kalor/perpindahan-kalor/contohsoal', [studyController::class, 'contohsoalkalor3'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('contohsoalkalor3');
Route::get('/fisika/suhu-dan-kalor/kalor/perpindahan-kalor/quiz', [studyController::class, 'quizkalor3'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('quizkalor3');
Route::post('/fisika/suhu-dan-kalor/kalor/perpindahan-kalor/quiz', [studyController::class, 'quizkalor3submit']);

Route::get('/fisika/suhu-dan-kalor/evaluasi', [studyController::class, 'evaluasi'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('evaluasi');
    Route::post('/fisika/suhu-dan-kalor/evaluasi', [studyController::class, 'evaluasisubmit']);
    
Route::get('/fisika/suhu-dan-kalor/rangkuman', [studyController::class, 'rangkuman'])
    ->middleware(['auth', 'verified', 'student'])
    ->name('rangkuman');
Route::post('/plusmiles1', [countController::class, 'plusmiles1']);
Route::post('/plusmiles2', [countController::class, 'plusmiles2']);
Route::post('/plusmiles3', [countController::class, 'plusmiles3']);
Route::post('/plusmiles4', [countController::class, 'plusmiles4']);
Route::post('/plusmiles5', [countController::class, 'plusmiles5']);
Route::post('/plusmiles6', [countController::class, 'plusmiles6']);
Route::post('/plusmiles7', [countController::class, 'plusmiles7']);
Route::post('/plusmiles8', [countController::class, 'plusmiles8']);
Route::post('/plusmiles9', [countController::class, 'plusmiles9']);
Route::post('/plusmiles91', [countController::class, 'plusmiles91']);
Route::post('/plusmiles10', [countController::class, 'plusmiles10']);
Route::post('/plusmiles11', [countController::class, 'plusmiles11']);
Route::post('/plusmiles12', [countController::class, 'plusmiles12']);
Route::post('/plusmiles13', [countController::class, 'plusmiles13']);
Route::post('/plusmiles14', [countController::class, 'plusmiles14']);

Route::get('/dashboard/xiimipa1', [dashboardController::class, 'xiimipa1'])
    ->middleware(['auth', 'verified', 'lecturer'])
    ->name('dashboard');
Route::get('/dashboard/xiimipa2', [dashboardController::class, 'xiimipa2'])
    ->middleware(['auth', 'verified', 'lecturer'])
    ->name('dashboard1');
Route::get('/dashboard/xiimipa3', [dashboardController::class, 'xiimipa3'])
    ->middleware(['auth', 'verified', 'lecturer'])
    ->name('dashboard2');
Route::get('/dashboard/xiimipa4', [dashboardController::class, 'xiimipa4'])
    ->middleware(['auth', 'verified', 'lecturer'])
    ->name('dashboard3');
Route::get('/dashboard/xiimipa5', [dashboardController::class, 'xiimipa5'])
    ->middleware(['auth', 'verified', 'lecturer'])
    ->name('dashboard4');
