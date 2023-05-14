<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\DashboardController;

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
    return view('user.v_home');
});


// Route::get('/admin2', function () {
//     return view('layout_admin.v_index');
// });

Route::get('/admin', [DashboardController::class, 'index'])->name('admin');

Route::controller(ProjectController::class)->group(function (){
    Route::get('/admin/project', 'index')->name('project');
    Route::get('/project/create', 'create');
    Route::post('/project/store', 'store');
});

Route::controller(ProductController::class)->group(function (){
    Route::get('/admin/product', 'index')->name('product');
    Route::get('/product/add', 'add');

});

Route::controller(ArticleController::class)->group(function (){
    Route::get('/article', 'index')->name('article');
    Route::get('/article/add', 'add');
});


// <-- Halaman User --> 
Route::get('/project/detail', function () {
    return view('user.project.v_detailproject');
});

Route::get('/project', function () {
    return view('user.project.v_project');
});
