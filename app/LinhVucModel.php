<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LinhVucModel extends Model
{
    //
    use SoftDeletes;
    protected $table="linh_vuc";
}