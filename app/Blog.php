<?php

namespace imond;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    private $fillable = ['title', 'author', 'content'];
}
