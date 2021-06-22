<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\BlogController;
use App\Models\Article;

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

Route::get('blog/category/{slug?}', [BlogController::class, 'category'])->name('category');
Route::get('blog/article/{slug?}', [BlogController::class, 'article'])->name('article');

Route::group(['prefix'=>'admin', 'namespace'=>'App\Http\Controllers\Admin', 'middleware'=>['auth', 'role:admin']], function(){
	 //Route::get('/', 'DashboardController@dashboard')->name('admin.index');
	 Route::get('/', [DashboardController::class, 'dashboard'])->name('admin');
    Route::get('category/edit/{id}', [
        'as' => 'admin.category.edit',
        'uses' => 'CategoryController@edit'
    ]);
	 Route::resource('/category', 'CategoryController', ['as'=>'admin']);
     Route::resource('/article', 'ArticleController', ['as'=>'admin']);
    Route::group(['prefix' => 'user_managment', 'namespace' => 'UserManagment'], function (){
        Route::resource('/user', 'UserController', ['as' => 'admin.user_managment']);
    });
});

//Route::get('/', function () {
//    return view('home');
//});

Route::get('/', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
//Route::get('/home', function (){
//    return view('blog.home');
//})->name('home');
