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