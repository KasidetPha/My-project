<?php

use App\Http\Controllers\AddnameController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// })->name("homeV2");

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [AuthController::class, 'showLogin'])->name("showLogin");
Route::post('/login', [AuthController::class, 'checkLogin'])->name("checkLogin");
Route::get('/logout', [AuthController::class, 'logout'])->name("logout");

Route::middleware(["auth.admin"])->group(function(){

    // users
    Route::get('/addname', [AddnameController::class, 'index'])->name("indexAddname");
    
    Route::post('/addfullname', [AddnameController::class, 'store'])->name("storeAddname");
    
    Route::get('/destroy/{id}', [AddnameController::class, 'destroy'])->name("destroyAddname");
    
    Route::get('/edit/{id}', [AddnameController::class, 'edit'])->name('editAddname');
    Route::put('/update/{id}', [AddnameController::class, 'update'])->name('updateAddname');

    // blog
    Route::get('/blog', [BlogController::class, 'index'])->name('indexBlog');

    Route::get('/blog/create', [BlogController::class, 'create'])->name('createBlog');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('storeBlog');

    Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('editBlog');
    Route::put('/blog/{blogs}/update', [BlogController::class, 'update'])->name('updateBlog');

    Route::get('/blog/{id}/delete', [BlogController::class, 'destroy'])->name('destroyBlog');
});
