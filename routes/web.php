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
    return view('welcome');
});

Route::get('/families/{program}/{rank}', 'FamilyController@showFamilyPage');

Route::get('/students/{id}', 'FamilyController@getStudentData');
Route::post('/students', 'FamilyController@createStudent');
Route::put('/students/{id}', 'FamilyController@updateStudent');
