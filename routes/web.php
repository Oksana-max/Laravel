<?php

//controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SourceController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
	Route::get ('/', IndexController::class) -> name('index');
	 Route::get('/contact', ContactController::class) -> name ('contact');
	 Route::get('/source', SourceController::class) -> name ('source');
	Route::resource('categories', AdminCategoryController::class);
	Route::resource('news', AdminNewsController::class);
});



Route::get('/home', [HomeController::class, 'index'])
->name('home');

Route::group(['prefix' => 'news'], function(){
	Route::get('/', [CategoryController::class, 'index'])
	->name('news'); //Все категории
	Route::get('/cat{id}', [NewsController::class, 'index'])
	->where('id', '\d+')
	->name('news/show'); // Конкретная категория
	Route::get('/cat/articale{id}', [NewsController::class, 'show'])
		->where('id', '\d+')
		->name('articale/show'); // Конкретная новость

});