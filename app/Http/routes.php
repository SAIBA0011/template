<?php

// Static Routes
Route::get('/', ['as' => 'homepage', 'uses' => 'PagesController@index']);

// Course Routes
Route::group(['prefix' => 'courses', 'as' => 'courses.'], function () {
    Route::get('/', ['as' => '/', 'uses' => 'CourseController@index']);
    Route::get('course-intro', ['as' => 'course-intro', 'uses' => 'CourseController@intro']);
});

// Events Routes
Route::get('events', ['as' => 'events', 'uses' => 'EventsController@index']);

//Profile Routes
Route::group(['prefix' => 'profile', 'as' => 'profile.'], function () {
    Route::get('/', ['as' => '/', 'uses' => 'ProfileController@index']);
    Route::get('cpd', ['as' => 'cpd', 'uses' => 'ProfileController@cpd']);
    Route::get('edit', ['as' => 'edit', 'uses' => 'ProfileController@edit']);
    Route::get('inbox', ['as' => 'inbox', 'uses' => 'ProfileController@inbox']);
    Route::get('events', ['as' => 'events', 'uses' => 'ProfileController@events']);
    Route::get('invoice', ['as' => 'invoice', 'uses' => 'ProfileController@invoice']);
    Route::get('courses', ['as' => 'courses', 'uses' => 'ProfileController@courses']);
    Route::get('membership', ['as' => 'membership', 'uses' => 'ProfileController@membership']);
    Route::get('assignments', ['as' => 'assignments', 'uses' => 'ProfileController@assignments']);
});