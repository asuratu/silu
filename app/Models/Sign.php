<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    //
    protected $fillable = [
        'course_id',
        'name',
        'sex',
        'img',
        'birthplace',
        'ethnic',
        'unit',
        'main_position',
        'id_card',
        'address',
        'phone',
        'email',
        'introduction',
        'company_intro',
        'file1',
        'file2',
        'file3',
        'file4',
        'file5',
    ];
}
