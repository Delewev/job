<?php

namespace App\Http\Controllers\Blog;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Controllers\Controller;

abstract class BaseController extends Controller
{
    use SoftDeletes;

    protected $fillable
        = [
            'title',
            'slug',
            'parent_id',
            'description'
        ];
}
