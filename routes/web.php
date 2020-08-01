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
    return view('dashboard/dashboard');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    return 'you are admin';
})->middleware(['auth', 'auth.admin']);

// Route::resource('/users', 'User\UserController', ['except' => ['show', 'create', 'store']]);
Route::namespace('User')->prefix('user')->middleware(['auth', 'auth.user'])->name('users.')->group(function(){
    Route::resource('/users', 'UserController');
    Route::get('/profile', 'UserController@profile')->name('profile');
});

Route::get('/user/users/{user}/edit', 'User\UserController@edit')->name('users.users.edit');

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function(){
    Route::resource('/users', 'UserController');
    Route::get('/profile', 'UserController@profile')->name('profile');
    Route::get('/users/{user}/destroy', 'UserController@destroy')->name('destroy');
    Route::get('/exportExcel', 'UserController@exportExcel');
    Route::get('/exportPdf', 'UserController@exportPdf');
    Route::get('/impersonate/user/{id}', 'ImpersonateController@index')->name('impersonate');
    
});

Route::get('/admin/impersonate/destroy', 'Admin\ImpersonateController@destroy')->name('impersonate.destroy');


