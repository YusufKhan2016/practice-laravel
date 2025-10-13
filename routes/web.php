<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Web Developer',
                'salary' => '50000'
            ],
            [
                'id' => 2,
                'title' => 'Teacher',
                'salary' => '40000'
            ],
            [
                'id' => 3,
                'title' => 'Director',
                'salary' => '10000'
            ],
            [
                'id' => 4,
                'title' => 'Security',
                'salary' => '1000000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Web Developer',
            'salary' => '50000'
        ],
        [
            'id' => 2,
            'title' => 'Teacher',
            'salary' => '40000'
        ],
        [
            'id' => 3,
            'title' => 'Director',
            'salary' => '10000'
        ],
        [
            'id' => 4,
            'title' => 'Security',
            'salary' => '1000000'
        ]
    ];

    $job = \illuminate\Support\Arr::first($jobs, fn ($job) => $job['id'] == $id);
    return view('job', [
        'job' => $job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});

