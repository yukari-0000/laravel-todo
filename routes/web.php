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

Route::view('/','welcome');

// Route::get('/', function () {
    // return view('welcome');
// });

Route::get('/index',function(){
    // return "<h2>hello world</h2>";
    return view('pages.index');
})->name('pages.index');

Route::get('/services','PagesController@services');

//Dynamic Routing
Route::get('/user/{id}/{name}',function($id,$name){
    return 'User Name:'.$name.' with ID'.$id;
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/todos','TodosController@index')->name('Todos');

Route::get('/new-todo', 'TodosController@create')->name('Create Todo');
Route::post('/store-todo', 'TodosController@store')->name('todos.store');

Route::delete('/delete-todos/{todo}','TodosController@delete')->name('todos.delete');

Route::get('/view-todos/{todo}', 'TodosController@show')->name('todos.show');

Route::get('/edit-todo/{todo}', 'TodosController@edit')->name('todos.edit');
Route::put('/update-todo/{todo}', 'TodosController@update')->name('todos.update');

Route::get('/todo-done/{todo}', 'TodosController@done')->name('todos.completed');
Route::get('/todo-not-done/{todo}', 'TodosController@not_done')->name('todos.not-completed');