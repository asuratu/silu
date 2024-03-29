<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CoursesAttr extends Model
{
    //
    protected $fillable = ['title', 'body', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
