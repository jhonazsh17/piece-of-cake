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

Route::get('/', 'IndexController@index');
Route::get('/admin', 'AdminController@index');
Route::post('/admin/guardar', 'AdminController@preguntaSave');
Route::post('/enviar/{id}/{idExamen}', 'AdminController@enviar');
Route::post('/estudiante/guardar', 'AdminController@estudianteGuardar');
Route::get('/session/{id}/exams', 'HomeController@listExams');
Route::get('/session/{id}/exam/{idExam}', 'HomeController@exam');
Route::post('/evaluation/{id}/answers', 'HomeController@saveAnswer');
Route::get('/help', 'IndexController@ayuda');


Route::post('/user/register','UserController@register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//-----> school
Route::get('/school/create', 'SchoolController@create')->name('create-school');
Route::post('/school/save', 'SchoolController@save')->name('save-school');
Route::get('/school/data', 'SchoolController@getSchool');

//-----> users
Route::get('/user/list', 'UserController@all');
Route::get('/user/create', 'UserController@create');

//-----> levels
Route::get('/level/list', 'LevelController@all');
Route::get('/level/create', 'LevelController@create');
Route::post('/level/save', 'LevelController@save');

//-----> periods
Route::get('/period/list', 'PeriodController@all');
Route::get('/period/year/create', 'PeriodController@createYear');
Route::post('/period/year/save', 'PeriodController@saveYear');
Route::get('/period/minimum/create', 'PeriodController@createMinimumPeriod');
Route::post('/period/minimum/save', 'PeriodController@saveMinimumPeriod');

//-----> students
Route::get('/student/list', 'DashboardController@getMyStudents');
Route::get('/students/for/{level}/level', 'DashboardController@getStudentsForLevel');

//-----> units and sessions
Route::get('/unit-and-session/list', 'DashboardController@getUnitsAndSessions');
Route::get('/unit/create', 'DashboardController@createUnit');
Route::post('/unit/save', 'DashboardController@saveUnit');
Route::get('/session/create', 'DashboardController@createSession');
Route::post('/session/save', 'DashboardController@saveSession');


Route::get('/evaluation/{type}', 'DashboardController@listEvaluations');
Route::get('/evaluation/{type}/create', 'DashboardController@createEvaluations');
Route::post('/evaluation/{type}/save', 'DashboardController@saveEvaluations');

Route::get('/evaluation/{id}/question/create', 'DashboardController@createQuestion');
Route::post('/evaluation/{id}/question/save', 'DashboardController@saveQuestion');

Route::get('/eval/uation/{id}', 'DashboardController@questionList');

Route::get('/eval/uation/go/{id}', 'HomeController@goExam');

//--- Gráficos
Route::get('/grafico/user/{id}','HomeController@grafico');

//--- Orden de Mérito
Route::get('/orden/user/{id}','HomeController@ordenMerito');

//--- answers
Route::get('/answers/eval/{idEval}/user/{id}','HomeController@answers');

