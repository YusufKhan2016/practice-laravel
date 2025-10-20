<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table =  'job_listings';

    // here the fillabe property specifies which attributes should be mass-assignable
    // $fillable = [];


    //here guarded is the opposite of fillable
    protected $guarded = [];

    public function employer()
    {
        $this->belongsTo(Employer::class);
    }
}

