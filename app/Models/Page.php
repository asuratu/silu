<?php

namespace App\Models;

use Encore\Admin\Traits\AdminBuilder;
use Encore\Admin\Traits\ModelTree;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use ModelTree;
    use AdminBuilder;

    protected $guarded = [];

    public function getParentPagesAttribute()
    {
        return Page::query()->find($this->parent_id);
    }

    public function getChildPagesAttribute()
    {
        return Page::query()->where('parent_id', $this->id)->get();
    }
}
