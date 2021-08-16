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
Route::get('/', 'PagesController@index')->name('home');
Route::prefix('admin')->group(function(){
    Route::get('/dashboard', 'PagesController@dashboard')->name('admin.dashboard');

    Route::get('/about', 'AboutPagesController@index')->name('admin.about');
    Route::put('/about', 'AboutPagesController@update')->name('admin.about.update');

    Route::get('/experience/create', 'ExperiencePagesController@create')->name('admin.experience.create');
    Route::post('/experience/create', 'ExperiencePagesController@store')->name('admin.experience.store');
    Route::get('/experience/list', 'ExperiencePagesController@list')->name('admin.experience.list');
    Route::get('/experience/edit/{id}', 'ExperiencePagesController@edit')->name('admin.experience.edit');
    Route::post('/experience/update/{id}', 'ExperiencePagesController@update')->name('admin.experience.update');
    Route::delete('/experience/destroy/{id}', 'ExperiencePagesController@destroy')->name('admin.experience.destroy');
    

    Route::get('/education/create', 'EducationPagesController@create')->name('admin.education.create');
    Route::post('/education/create', 'EducationPagesController@store')->name('admin.education.store');
    Route::get('/education/list', 'EducationPagesController@list')->name('admin.education.list');
    Route::get('/education/edit/{id}', 'EducationPagesController@edit')->name('admin.education.edit');
    Route::post('/education/update/{id}', 'EducationPagesController@update')->name('admin.education.update');
    Route::delete('/education/destroy/{id}', 'EducationPagesController@destroy')->name('admin.education.destroy');

    Route::get('/project/create', 'ProjectPagesController@create')->name('admin.project.create');
    Route::post('/project/create', 'ProjectPagesController@store')->name('admin.project.store');
    Route::get('/project/list', 'ProjectPagesController@list')->name('admin.project.list');
    Route::get('/project/edit/{id}', 'ProjectPagesController@edit')->name('admin.project.edit');
    Route::post('/project/update/{id}', 'ProjectPagesController@update')->name('admin.project.update');
    Route::delete('/project/destroy/{id}', 'ProjectPagesController@destroy')->name('admin.project.destroy');
    
});

Route::post('/contact', 'ContactFormController@store')->name('contact.store');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';