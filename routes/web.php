<?php

//controllers
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
	Route::resource('categories', AdminCategoryController::class);
	Route::resource('news', AdminNewsController::class);
});


// Route::get('/category', [CategoryController::class, 'index'])
// ->name('category');
		
// Route::group(['prefix' => 'news'], function(){

//     Route::get('/', [NewsController::class, 'index'])
// 		->name('news');
// 	Route::get('/show/{id}', [NewsController::class, 'show'])
// 		->where('id', '\d+')
// 		->name('news/show');
    
// });


Route::get('/home', [NewsController::class, 'index']);
Route::group(['prefix' => 'news'], function(){
	Route::get('/', [CategoryController::class, 'index'])
	->name('news'); //Все категории
	Route::get('/cat{id}', [NewsController::class, 'index'])
	->name('news/show'); // Конкретная категория
	Route::get('/cat/artical{id}', [NewsController::class, 'show'])
		->where('id', '\d+')
		->name('news/cat/show'); // Конкретная новость

});