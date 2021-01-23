<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routesasssssss
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {return view('home', ['categories' => \App\category::all()]);})->name('home');
Route::get('/sidebar', 'BlogController@sidebar')->name('sidebar');
Route::get('/contact-us', function (){return view('contact');})->name('contact');
Route::get('/about-us', function (){return view('about');})->name('about');




Route::get('/blog', 'ArticleController@index')->name('blog');
Route::get('/blog/{article}', 'ArticleController@show')->name('singlePost');
Route::get('/category/{id}', 'ArticleController@category')->name('single_category');

//AUTH USER
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'dashboardController@dashboard')->name('dashboard');

    //article GROUP
    Route::resource('article', 'ArticleController');
    Route::get('/dashboard/addpost', 'ArticleController@addPost')->name('addpost');
    Route::get('/dashboard/postlist', 'ArticleController@postList')->name('postList');




    //TO DO GROUP
    Route::get('/dashboard/todo', 'TodoController@index')->name('todopage');
    Route::resource('todo', 'TodoController');

    //category
    Route::resource('category', 'CategoryController');
    Route::get('/dashboard/category', 'CategoryController@main')->name('category');

    Route::get('/dashboard/superadmin', 'dashboardController@admin')->middleware('checkRole:superadmin')->name('superAdmin');




});





