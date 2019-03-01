<?php

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/dashboard', 'PagesController@dashboard');
Route::post('/allreports', 'PagesController@allReports');
Route::get('/allreports', 'PagesController@notFound');
Route::get('/viewreport/{id}', 'PagesController@viewReport');
Route::get('/showoutput', 'PagesController@showOutput');
Route::get('/editreport', 'PagesController@editReport');
Route::post('/addreport', 'PagesController@addReport');
// Route::post('/addreport', 'PostsController@pendingOrReport');
Route::post('/addpersonal', 'PagesController@addPersonal');
Route::get('/addpersonal', 'PagesController@notFound');
Route::get('/pendingreports', 'PagesController@pendingReports');
Route::get('/showpending/{id}', 'PagesController@showPending');

Route::get('/allagencies', 'PagesController@allAgencies');
Route::post('/editagency', 'PagesController@editAgency');
Route::get('/addagency', 'PagesController@addAgency');
Route::post('/addagency', 'PostsController@addAgency');
Route::get('/viewagency/{id}', 'PagesController@viewAgency');

Route::get('/preview/{id}', 'PagesController@preview');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/registeruser', 'PostsController@Register');
Route::post('/pendingorreport', 'PostsController@pendingOrReport');
Route::post('/savereport', 'PostsController@saveReport');
Route::get('/savereport', 'PagesController@notFound');

Route::get('/printprev/{id}', 'PostsController@printPrev');

Route::get('getpendingtemp/{id}', 'PagesController@getPendingTemp');
Route::post('test', 'PagesController@test');

// Search Results
Route::post('/search', 'PostsController@reportSearch');
Route::post('/search-pending', 'PostsController@pendingSearch');