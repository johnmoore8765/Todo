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


/*Route::get('/todos', 'TodoController@index')->name('todo.index');
Route::get('/todos/create', 'TodoController@create');
Route::get('/todos/{todo}/edit', 'TodoController@edit');
Route::post('/todos/create', 'TodoController@store');
Route::patch('/todos/{todo}/update', 'TodoController@update')->name('todo.update');
Route::delete('/todos/{todo}/delete', 'TodoController@delete')->name('todo.delete');
*/

Route::middleware('auth')->group(function(){

    Route::resource('/todo','TodoController');
    Route::put('/todos/{todo}/complete', 'TodoController@complete')->name('todo.complete');
    Route::put('/todos/{todo}/incomplete', 'TodoController@incomplete')->name('todo.incomplete');
    //Route::post('/upload', 'TodoController@upload');
    Route::get('/home', 'TodoController@uploadForm');
    Route::post('/home', 'TodoController@uploadFile');
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/search', 'TodoController@search');
    Route::get('/print', 'TodoController@print')->name('print');

});



Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
