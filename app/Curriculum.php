<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $fillable = ['category','period','content','slug','datetime','is_published'];
    protected $table = 'curriculums';

}
