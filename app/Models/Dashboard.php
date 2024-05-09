<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    use HasFactory;

    protected $fillable = [
        'province',
        'district',
        'number_of_patients',
        'number_of_deaths',
        'number_of_recovered',
        'number_of_tests',
        'status',
    ];
}
