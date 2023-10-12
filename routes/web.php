<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// users path - super admin view
Route::get('users/index', 'UserController@index')->name('users.index');
Route::get('users/create', 'UserController@create')->name('users.create');
Route::post('users/store', 'UserController@store')->name('users.store');
//Route::get('users/{user}', 'UserController@show')->name('users.show');
Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
Route::put('users/{user}', 'UserController@update')->name('users.update');
Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
Route::get('users/alluser', 'UserController@alluser')->name('users.alluser');

// super admin's dashboard
Route::get('/mydashboard', 'HomeController@mydashboard')->name('mydashboard');

// roles path - super admin view
//Route::resource('roles', 'RoleController');
Route::get('roles/index', 'RoleController@index')->name('roles.index');
Route::get('roles/create', 'RoleController@create')->name('roles.create');
Route::post('roles/store', 'RoleController@store')->name('roles.store');
//Route::get('roles/{role}', 'RoleController@show')->name('roles.show');
Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
Route::put('roles/{role}', 'RoleController@update')->name('roles.update');
Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy');
Route::get('roles/allrole', 'RoleController@allrole')->name('roles.allrole');

// sites path - super admin view
Route::get('sites/index', 'SiteController@index')->name('sites.index');
Route::get('sites/create', 'SiteController@create')->name('sites.create');
Route::post('sites/store', 'SiteController@store')->name('sites.store');
//Route::get('sites/{site}', 'SiteController@show')->name('sites.show');
Route::get('sites/{site}/edit', 'SiteController@edit')->name('sites.edit');
Route::put('sites/{site}', 'SiteController@update')->name('sites.update');
Route::delete('sites/{site}', 'SiteController@destroy')->name('sites.destroy');
Route::get('sites/allsite', 'SiteController@allsite')->name('sites.allsite');

// kb category path - super admin view
Route::get('kbcategorys/index', 'KbcategoryController@index')->name('kbcategorys.index');
Route::get('kbcategorys/create', 'KbcategoryController@create')->name('kbcategorys.create');
Route::post('kbcategorys/store', 'KbcategoryController@store')->name('kbcategorys.store');
//Route::get('kbcategorys/{kbcategory}', 'KbcategoryController@show')->name('kbcategorys.show');
Route::get('kbcategorys/{kbcategory}/edit', 'KbcategoryController@edit')->name('kbcategorys.edit');
Route::put('kbcategorys/{kbcategory}', 'KbcategoryController@update')->name('kbcategorys.update');
Route::delete('kbcategorys/{kbcategory}', 'KbcategoryController@destroy')->name('kbcategorys.destroy');
Route::get('kbcategorys/allkbcategory', 'KbcategoryController@allkbcategory')->name('kbcategorys.allkbcategory');

// kb path - super admin view
Route::get('knowledgebases/index', 'KnowledgebaseController@index')->name('knowledgebases.index');
Route::get('knowledgebases/create', 'KnowledgebaseController@create')->name('knowledgebases.create');
Route::post('knowledgebases/store', 'KnowledgebaseController@store')->name('knowledgebases.store');
//Route::get('knowledgebases/{knowledgebase}', 'KnowledgebaseController@show')->name('knowledgebases.show');
Route::get('knowledgebases/{knowledgebase}/edit', 'KnowledgebaseController@edit')->name('knowledgebases.edit');
Route::put('knowledgebases/{knowledgebase}', 'KnowledgebaseController@update')->name('knowledgebases.update');
Route::delete('knowledgebases/{knowledgebase}', 'KnowledgebaseController@destroy')->name('knowledgebases.destroy');
Route::get('knowledgebases/allknowledgebase', 'KnowledgebaseController@allknowledgebase')->name('knowledgebases.allknowledgebase');

// equipment path - super admin view
Route::get('equipments/index', 'EquipmentController@index')->name('equipments.index');
Route::get('equipments/create', 'EquipmentController@create')->name('equipments.create');
Route::post('equipments/store', 'EquipmentController@store')->name('equipments.store');
//Route::get('equipments/{equipment}', 'EquipmentController@show')->name('equipments.show');
Route::get('equipments/{equipment}/edit', 'EquipmentController@edit')->name('equipments.edit');
Route::put('equipments/{equipment}', 'EquipmentController@update')->name('equipments.update');
Route::delete('equipments/{equipment}', 'EquipmentController@destroy')->name('equipments.destroy');
Route::get('equipments/allasset', 'EquipmentController@allasset')->name('equipments.allasset');

// rp path - super admin view
Route::get('reportingpersons/index', 'ReportingpersonController@index')->name('reportingpersons.index');
Route::get('reportingpersons/create', 'ReportingpersonController@create')->name('reportingpersons.create');
Route::post('reportingpersons/store', 'ReportingpersonController@store')->name('reportingpersons.store');
//Route::get('reportingpersons/{reportingperson}', 'ReportingpersonController@show')->name('reportingpersons.show');
Route::get('reportingpersons/{reportingperson}/edit', 'ReportingpersonController@edit')->name('reportingpersons.edit');
Route::put('reportingpersons/{reportingperson}', 'ReportingpersonController@update')->name('reportingpersons.update');
Route::delete('reportingpersons/{reportingperson}', 'ReportingpersonController@destroy')->name('reportingpersons.destroy');
Route::get('reportingpersons/allreportingperson', 'ReportingpersonController@allreportingperson')->name('reportingpersons.allreportingperson');
