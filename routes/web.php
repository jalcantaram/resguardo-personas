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

Auth::routes();

//Dashboard
Route::group(['middleware' => ['auth'], 'as' => 'dashboard.'], function () {
    Route::get('/', function(){ return view('home'); });
    Route::get('admin','AdminController@show')->name('admin.show');
    Route::resource('user', 'UserController');
    Route::get('user_import','UserController@import')->name('user_import');
    Route::post('user_make_import','UserController@make_import')->name('user_make_import');
    Route::resource('role', 'RoleController');
    Route::get('user/{user}/assign_role', 'UserController@assign_role')->name('user.assign_role');
    Route::post('user/{user}/role_assignment', 'UserController@role_assignment')->name('user.role_assignment');
    Route::get('user/{user}/assign_permission', 'UserController@assign_permission')->name('user.assign_permission');
    Route::post('user/{user}/permission_assignment', 'UserController@permission_assignment')->name('user.permission_assignment');
    Route::resource('permission', 'PermissionController');
    Route::resource('dependence', 'DependenceController');
    Route::resource('person', 'PersonController');
    Route::resource('report', 'ReportController');
    Route::resource('search', 'SearchController');
});

//Rutas Locatel
Route::group(['middleware' => ['auth'], 'as' => 'locatel.'], function(){
    //Route::resource('locatel/person/create', 'PersonController@locatel_create')->name('person.locatel_create');
});

//Rutas dependencia
Route::group(['middleware' => ['auth'], 'as' => 'dependence.'], function(){
    Route::resource('person_dependence', 'PersonDependenceController');
    Route::get('person_dependence/identified/create', 'PersonDependenceController@create_identified')->name('person_dependence.create_identified');
    Route::post('person_dependence/identified/store', 'PersonDependenceController@store_identified')->name('person_dependence.store_identified');
    Route::resource('search_dependence', 'SearchDependenceController');
});