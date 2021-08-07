<?php

//controllers
use App\Http\Controllers\NewsController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;

Route::get('/', function () {
    return view('welcome');
});



Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
	Route::resource('categories', AdminCategoryController::class);
	Route::resource('news', AdminNewsController::class);
});



Route::group(['prefix' => 'news'], function(){
    Route::get('/', [NewsController::class, 'index'])
		->name('news');
	Route::get('/show/{id}', [NewsController::class, 'show'])
		->where('id', '\d+')
		->name('news/show');
    
});



// Route::get('/index', function () {
//     return view('index');
// });
// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/news', function () {
//     return view('news');
// });

?>