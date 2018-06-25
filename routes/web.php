<?php

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
    return view('index');
});

Route::get('/deploy', function () {
    dd("Auto deploy test");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Admin Route
Route::group(['middleware' => ['auth']], function () {

    // Skill routes
    Route::get('account','UserController@account');
    Route::post('skill/create','Api\Admin\SkillController@createSkill');
    Route::patch('skill/edit/{skill_id}','Api\Admin\SkillController@editSkill');
    Route::delete('skill/delete/{skill_id}','Api\Admin\SkillController@deleteSkill');

    // Category routes
    Route::get('categories','Api\Admin\CategoryController@getCategories');
    Route::post('category/create','Api\Admin\CategoryController@createCategory');
    Route::patch('category/edit/{category_id}','Api\Admin\CategoryController@editCategory');
    Route::delete('category/delete/{category_id}','Api\Admin\CategoryController@deleteCategory');

});
