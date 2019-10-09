<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function courses_attrs()
    {
        return $this->hasMany(CoursesAttr::class);
    }
}
