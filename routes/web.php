<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});


Route::get('/jobs', function () {
    return view('jobs', [
        'Jobs' => [['Id' => 1
                  ,'Title' => 'Full Stack Developer'
                  ,'salary' => '120k'
                   ]
                  ,[
                    'Id' => 2
                  ,'Title' => 'Backend Developer'
                  ,'salary' => '100k'
                   ]
                  ,['Id' => 3
                  ,'Title' => 'Frontend Developer'
                  ,'salary' => '90k']]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $Jobs = [
        ['Id' => 1
                  ,'Title' => 'Full Stack Developer'
                  ,'salary' => '120k'
                   ]
                  ,[
                    'Id' => 2
                  ,'Title' => 'Backend Developer'
                  ,'salary' => '100k'
                   ]
                  ,['Id' => 3
                  ,'Title' => 'Frontend Developer'
                  ,'salary' => '90k']];
    $job = Arr::first($Jobs, fn($job) => $job['Id'] == $id);
    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
