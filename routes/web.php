<?php

use Illuminate\Support\Facades\Route;
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
    Route::get('/admin/project/create', 'create');
    Route::post('/admin/project/store', 'store');
    Route::get('/admin/project/show/{id_project}', 'show');
    Route::get('/admin/project/edit/{id_project}', 'edit');
    Route::get('/admin/project/update/{id_project}', 'update');
    Route::get('/admin/project/destroy/{id_project}', 'destroy');
});

// Route::post('/admin/project/store', [ProjectController::class, 'store']);

Route::controller(ProductController::class)->group(function (){
    Route::get('/admin/product', 'index');
    Route::get('/product/add', 'add');

});


// <-- Halaman User --> 
Route::get('/project/detail', function () {
    return view('user.project.v_detailproject');
});

Route::get('/project', function () {
    return view('user.project.v_project');
});

Route::get('/product', function () {
    return view('user.product.v_product');
});

