<?php

namespace App\Models;
use illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

// class Job extends Model
// {
//     //
// }


class Job {
    public static function all():array
    {
        return [
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
    }

    public static function find(int $id):array
    {
        $job = Arr::first(Job::all(), fn ($job) => $job['id'] == $id);

        if(!$job) {
            abort(404);
        }else {
            return $job;
        }
    }
}
