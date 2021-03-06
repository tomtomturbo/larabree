<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;


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
    // return view('/master');
    return redirect('articles');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');

    // Route::resource('tasks', \App\Http\Controllers\TaskController::class);
});

// Route::get('/master', function () {
//     return redirect('articles');
// });
Route::resources([
    'articles' => CommentController::class,
    'articles' => ArticleController::class

]);

// Route::view('/master', 'master')->name('master');

require __DIR__.'/auth.php';
