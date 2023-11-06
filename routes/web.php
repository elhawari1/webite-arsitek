<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\Admin\ArticleController;
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


Route::controller(LoginController::class)->group(function (){
    Route::get('/login', 'index')->name('login');
    Route::post('/login/proses', 'loginProses')->name('loginProses');
    Route::get('/logout', 'logout')->name('logout');
    
});

Route::middleware(['auth'])->group(function () {

    Route::controller(DashboardController::class)->group(function (){
        Route::get('/admin', 'index')->name('admin');
        Route::post('/admin/banner/store', 'store');
        Route::post('/admin/banner/update/{id_banner}', 'update');
        Route::get('/admin/banner/destroy/{id_banner}', 'destroy');
    });

    Route::controller(ProjectController::class)->group(function (){
        Route::get('/admin/project', 'index')->name('project');
        Route::get('/admin/project/create', 'create');
        Route::post('/admin/project/store', 'store');
        Route::get('/admin/project/show/{id_project}', 'show');
        Route::get('/admin/project/edit/{id_project}', 'edit');
        Route::post('/admin/project/update/{id_project}', 'update');
        Route::get('/admin/project/destroy/{id_project}', 'destroy');
    });

    Route::controller(ProductController::class)->group(function (){
        Route::get('/admin/product', 'index')->name('product');
        Route::get('/admin/product/create', 'create');
        Route::post('/admin/product/store', 'store');
        Route::get('/admin/product/show/{id_product}', 'show');
        Route::get('/admin/product/edit/{id_product}', 'edit');
        Route::post('/admin/product/update/{id_product}', 'update');
        Route::get('/admin/product/destroy/{id_product}', 'destroy');

    });

    Route::controller(ArticleController::class)->group(function ()
    {
      Route::get('/admin/article', 'index')->name('article');  
    });

});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::controller(UserProjectController::class)->group(function (){
    Route::get('/project', 'indexProject');
    Route::get('/project/detail/{id_project}', 'showProject');
    Route::get('/product', 'indexproduct');
    Route::get('/product/detail/{id_product}', 'showProduct');
});