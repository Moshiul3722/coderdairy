<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\ProblemController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Models\Tag;
use Illuminate\Routing\RouteGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('frontend.welcome');
// });
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('problems', [HomeController::class, 'allProblems'])->name('allProblems');
// Route::get('problem/{id}', [HomeController::class, 'showProblem']); এইটাও কাজ করে
Route::get('problem/{id}', [HomeController::class, 'showProblem'])->name('problem');

Route::prefix('dashboard')->middleware(['auth'])->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('dashboard');

    Route::resource('problem', ProblemController::class);
    Route::resource('solution', SolutionController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('tag', TagController::class);
    Route::resource('activity', ActivityController::class);
    Route::resource('phone', PhoneController::class);

    // user profile route
    Route::get('profile', [UserController::class, 'userProfile'])->name('profile');
    Route::post('update', [UserController::class, 'update'])->name('profile.update');

    Route::post('ajax/tag/store', function (Request $request) {
        try {
            $tag = Tag::create([
                'name'    => $request->name,
                'slug'    => Str::slug($request->name),
                'user_id' => Auth::id()
            ]);
            return response()->json(['tag' => $tag, 'success' => 'Tag Created']);
        } catch (\Throwable $th) {
            return response()->json(['error' => $th->getMessage()]);
        }
    })->name('ajax.tag.store');
});


require __DIR__ . '/auth.php';
