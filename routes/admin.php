<?php 
Route::group(['prefix' => 'admin'], function(){
  //showing login form when user hit the main page
  //Route::any('/login ', 'Auth\LoginController@showLoginForm');
  Route::group(['namespace' => 'Admin'],function(){  
  	Route::resource('categories','CategoryController');
    // Route::get('/dashboard','AdminController@dashboard');
    // Route::get('/categories/new','CategoryController@new');
    // Route::post('/categories/create','CategoryController@create');
});
});

?>