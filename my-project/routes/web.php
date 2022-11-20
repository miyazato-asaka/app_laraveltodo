<?php

Route::get('/folder/{id}/tasks','TasksController@index')->name('tasks.index');