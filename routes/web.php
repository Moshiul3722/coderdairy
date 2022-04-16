<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\TagController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

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




Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::resource('problem', ProblemController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('tag', TagController::class);
});


require __DIR__ . '/auth.php';
