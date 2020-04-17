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


Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']],
    function (){
        Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    });
Route::get('/', 'PostController@index');


Route::get('news/','PostController@index')->name('news.index');

Route::get('news/create','PostController@create')->name('news.create');
Route::post ('news/create','PostController@store')->name('news.store');

Route::get ('news/show/{id}', 'PostController@show')->name('news.show');

Route::get ('news/edit{id}', 'PostController@edit')->name('news.edit');

Route::patch ('news/edit{id}', 'PostController@update')->name('news.update');

Route::delete('news/{id}', 'PostController@destroy')->name('news.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
