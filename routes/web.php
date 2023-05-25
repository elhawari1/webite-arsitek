<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\UserProjectController;

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

Route::controller(DashboardController::class, 'index')->group(function (){
    Route::get('/admin', 'index')->name('admin');
    Route::post('/admin/banner/store', 'store');
    Route::put('/admin/banner/update/{id_banner}', 'update');
    Route::get('/admin/banner/destroy/{id_banner}', 'destroy');
});

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


Route::controller(UserProjectController::class)->group(function (){
    Route::get('/project', 'index');
    Route::get('project/detail', 'show');
});

Route::get('/product', function () {
    return view('user.product.v_product');
});
