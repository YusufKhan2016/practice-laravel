<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home', [
        'jobs' => Job::all()
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $data = Job::find($id);
    dd($data);
    return view('job', [
        'job' => Job::find($id)

    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

