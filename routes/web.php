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
Auth::routes();

Route::get('/Home', 'TestController@index')->name('Home');


Route::get('/Show', 'TestController@show')->name('Show');
Route::post('/Home/create', 'TestController@create')->name('Home.create');
Route::get('/Home/edit/{id}', 'TestController@edit')->name('Home.edit');
Route::post('/Home/update/{id}', 'TestController@update')->name('Home.update');
Route::get('/Home/delete/{id}', 'TestController@delete')->name('Home.delete');
