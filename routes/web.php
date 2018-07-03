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

Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/contact', function () {
    return view('contact');
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/categories', 'HomeController@categories')->name('categories');
Route::get('/advertdetail/{advert_id}/{name}', 'HomeController@advertDetail')->name('advertdetail');

Route::post('/login/facebook', 'Auth\LoginController@facebookLogin')->name('facebook.login');
Route::post('/register/facebook', 'Auth\RegisterController@facebookLogin')->name('facebook.register');


Route::post('/newsletter/subscribe', 'NewsLetterController@subscribe')->name('newsletter.subscribe');
Route::get('/newsletter/unsubscribe/{email}/{hash}', 'NewsLetterController@unsubscribe')->name('newsletter.unsubscribe');

//Advert route
Route::post('/advert/search', 'SearchController@search')->name('advert.search');


Route::post('/admin/login', 'Auth\LoginController@adminLogin')->name('admin.login');

Route::group(['prefix' => 'api/v1/'], function () {
    Route::get('countries','LocationController@getCountries');
    Route::get('states/{country_id}','LocationController@getStates');
    Route::get('lgas/{state_id}','LocationController@getLgas');

    Route::get('categories','CategoryController@getCategories');
    Route::get('subcategories/{category_id}','CategoryController@getSubCategories');

    Route::get('types/{subcategory_id}','TypeController@getTypes');
    Route::get('subtype/{type_id}','TypeController@getSubTypes');

});

//Report route
Route::group(['middleware' => ['auth']], function () {
    Route::post('advert/report/{id}','ReportController@report');
});

// Admin Route
Route::group(['middleware' => ['auth'], 'prefix' => 'account'], function () {
    

    Route::get('adverts/reported','ReportController@myreport');
    Route::get('advert/reports/{id}','ReportController@reportsOnAdvert');


    Route::get('apiprofile','UserController@apiProfile');
    Route::get('apiuser','UserController@apiUser');

    // Skill routes
    Route::get('dashboard','UserController@dashboard');
    Route::get('profile','UserController@profile');
    Route::get('social','UserController@social');

    Route::get('advert','AdvertController@advert');
    Route::get('myadvert','AdvertController@myAdvert');
    
    Route::post('address/update','UserController@updateContact');
    Route::post('social/update','UserController@updateSocial');

    Route::post('profile/update','UserController@updateProfile');
    Route::get('contact','UserController@contact');

    Route::post('advert/create','AdvertController@createAdvert');
    Route::delete('advert/delete/{advert_id}','AdvertController@deleteAdvert');
    
    
    Route::post('skill/create','Api\Admin\SkillController@createSkill');
    Route::patch('skill/edit/{skill_id}','Api\Admin\SkillController@editSkill');
    Route::delete('skill/delete/{skill_id}','Api\Admin\SkillController@deleteSkill');

    // Category routes
    Route::get('categories','Api\Admin\CategoryController@getCategories');
    Route::post('category/create','Api\Admin\CategoryController@createCategory');
    Route::patch('category/edit/{category_id}','Api\Admin\CategoryController@editCategory');
    Route::delete('category/delete/{category_id}','Api\Admin\CategoryController@deleteCategory');

    
});


// Admin Route
Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function () {

    Route::get('dashboard','Admin\AdminController@dashboard');
    Route::get('manage/categories','Admin\CategoryController@category');
    Route::get('manage/subcategories','Admin\CategoryController@subcategory');
    Route::post('manage/category/create','Admin\CategoryController@createCategory')->name('admin.category.create');
    Route::patch('manage/category/edit/{category_id}','Admin\CategoryController@editCategory')->name('admin.category.edit');
    Route::post('manage/subcategory/create','Admin\CategoryController@createSubCategory')->name('admin.subcategory.create');
    Route::patch('manage/subcategory/edit/{subcategory_id}','Admin\CategoryController@editSubCategory')->name('admin.subcategory.edit');
    
    Route::delete('manage/category/delete/{id}','Admin\CategoryController@deleteCategory')->name('admin.category.delete');
    Route::delete('manage/subcategory/delete/{id}','Admin\CategoryController@deleteSubCategory')->name('admin.subcategory.delete');


    Route::get('manage/types','Admin\TypeController@type');
    Route::get('manage/user/view/{id}','Admin\UserController@viewUser');
    Route::get('manage/subtypes','Admin\TypeController@subtype');
    Route::post('manage/type/create','Admin\TypeController@createType')->name('admin.type.create');
    Route::patch('manage/type/edit/{type_id}','Admin\TypeController@editType')->name('admin.type.edit');
    
    Route::post('manage/subtype/create','Admin\TypeController@createSubType')->name('admin.subtype.create');
    Route::delete('manage/type/delete/{id}','Admin\TypeController@deleteType')->name('admin.type.delete');
    Route::delete('manage/subtype/delete/{id}','Admin\TypeController@deleteSubType')->name('admin.subtype.delete');
    Route::patch('manage/subtype/edit/{subtype_id}','Admin\TypeController@editSubType')->name('admin.subtype.edit');
    
    Route::get('manage/users','Admin\UserController@user');
    Route::post('manage/user/create','Admin\UserController@createUser')->name('admin.user.create');
    Route::post('manage/user/ban/{id}','Admin\UserController@banUser')->name('admin.user.ban');
    Route::post('manage/user/unban/{id}','Admin\UserController@unbanUser')->name('admin.user.unban');
    Route::delete('manage/user/delete/{id}','Admin\UserController@deleteUser')->name('admin.user.delete');
  
    Route::get('manage/adverts/reports','Admin\ReportController@report');
    // Route::post('manage/user/create','Admin\UserController@createUser')->name('admin.user.create');
    // Route::delete('manage/user/delete/{id}','Admin\UserController@deleteUser')->name('admin.user.delete');
  

    
    // Skill routes
    // Route::get('dashboard','UserController@dashboard');
    // Route::get('profile','UserController@profile');
    // Route::get('social','UserController@social');
    
    Route::post('address/update','UserController@updateContact');
    Route::post('social/update','UserController@updateSocial');

    Route::post('profile/update','UserController@updateProfile');
    Route::get('contact','UserController@contact');
    
    
    Route::post('skill/create','Api\Admin\SkillController@createSkill');
    Route::patch('skill/edit/{skill_id}','Api\Admin\SkillController@editSkill');
    Route::delete('skill/delete/{skill_id}','Api\Admin\SkillController@deleteSkill');

    // Category routes
    Route::get('categories','Api\Admin\CategoryController@getCategories');
    Route::post('category/create','Api\Admin\CategoryController@createCategory');
    Route::patch('category/edit/{category_id}','Api\Admin\CategoryController@editCategory');
    Route::delete('category/delete/{category_id}','Api\Admin\CategoryController@deleteCategory');

});
