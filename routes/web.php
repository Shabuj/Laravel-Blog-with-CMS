<?php

//user
//Route::group(['namespace' => 'User'] , function(){

Route::get('/index','pageController@index')->name('index');
Route::get('/contact','pageController@contact')->name('contact');
Route::get('/about','pageController@about')->name('about');
Route::get('/read_post/{id}','PostController@readmore')->name('read_post');
Route::get('/cat_post/{id}','PostController@cat_post')->name('cat_post');
Route::get('/latest_post/{id}','PostController@latest_post')->name('latest_post');
Route::post('/UserContact','PostController@store')->name('UserContact');
Route::post('/search','PostController@search_key')->name('search');
//});

//admin
Route::group(['namespace' => 'admin'] , function(){

Route::get('/index1','PageController@index')->name('index1');
Route::get('/addCategory','PageController@addCategory')->name('addCategory');
Route::post('/category_save','PostController@createCategory')->name('category_save');
Route::get('/catlist','PostController@show_category')->name('catlist');
Route::get('/editcat/{id}','PostController@edit_category')->name('editcat');
Route::get('/delcat/{id}','PostController@delete_category')->name('delcat');
Route::post('/category_update/{id}','PostController@updateCategory')->name('category_update');
Route::get('/addpost','PageController@addpost')->name('addpost');
Route::post('/post_save','PostController@post_save')->name('post_save');
Route::get('/postlist','PostController@postlist')->name('postlist');
Route::get('/editPost/{id}','PostController@editPost')->name('editPost');
Route::get('/deletePost/{id}','PostController@deletePost')->name('deletePost');
Route::post('/editedpost/{id}','PostController@editedpost')->name('editedpost');


});
Auth::routes();
Route::get('/login1','Auth\LoginController@showLoginForm')->name('login1');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

