<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Auth;

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
    return redirect()->route('home');
})->name('index');

Route::get('/home', function () {
    return redirect()->route('index');
})->name('home');

Route::middleware(['auth.admin'])->group(function () {
    Route::prefix('/questions')->group(function () {
        Route::get('', [QuestionController::class, 'index'])->name('questions.index');
        Route::get('/create', [QuestionController::class, 'create'])->name('questions.create');
        Route::post('', [QuestionController::class, 'store'])->name('questions.store');
        Route::get('/{id}', [QuestionController::class, 'show'])->name('questions.show');
        Route::delete('/{id}', [QuestionController::class, 'destroy'])->name('questions.destroy');
        Route::get('/{id}/edit', [QuestionController::class, 'edit'])->name('questions.edit');
        Route::put('/{id}', [QuestionController::class, 'update'])->name('questions.update');
    });
});

Route::prefix('/quiz')->group(function () {
    Route::get('', [QuizController::class, 'index'])->name('quiz.index');
    Route::post('', [QuizController::class, 'store'])->name('quiz.store');
    Route::get('/{id}', [QuizController::class, 'show'])->name('quiz.show');
    Route::post('/{id}', [QuizController::class, 'storeScore'])->name('quiz.storeScore');
});

Auth::routes([
    'login'    => true,
    'logout'   => true,
    'register' => true,
    'reset'    => false,  // for resetting passwords
    'confirm'  => false,  // for additional password confirmations
    'verify'   => false,  // for email verification
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::fallback(function () {
    return view('404');
})->name('404');
