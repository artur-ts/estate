<?php

use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\AdminDashboardController;
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

Route::redirect('/', '/am')->name('home');

Route::group(['prefix' => '{language}' , 'where' => ['language' => '[a-zA-Z]{2}']], function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/admin-dashboard/login', [LoginController::class, 'index'])->name('admin-dashboard.login');
    Route::post('/admin-dashboard/login', [LoginController::class, 'store']);

    Route::group(['middleware' => 'auth', 'prefix' => '/admin-dashboard', 'as' => 'admin-dashboard.'], function () {
        Route::get('/', [AdminDashboardController::class, 'index']);
        Route::get('/posts', [AdminPostController::class, 'index'])->name('posts.index');
        Route::get('/posts/create', [AdminPostController::class, 'create'])->name('posts.create');

//        Route::group(['middleware' => 'super-admin'] , function () {
            Route::get('/categories', [AdminCategoryController::class, 'index'])->name('categories.index');
            Route::get('/categories/create', [AdminCategoryController::class, 'create'])->name('categories.create');
            Route::post('/categories/create', [AdminCategoryController::class, 'store']);
            Route::get('/categories/edit/{categoryId}', [AdminCategoryController::class, 'edit'])->name('categories.edit');
            Route::put('/categories/edit/{categoryId}', [AdminCategoryController::class, 'update'])->name('categories.edit');
            Route::delete('/categories/edit/{categoryId}', [AdminCategoryController::class, 'delete'])->name('categories.delete');
//        });

    });

} );
