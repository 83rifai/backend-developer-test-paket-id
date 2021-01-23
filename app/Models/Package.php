<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\SoftDeletes;

class Package extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $collection = 'package';
    protected $dates = ['deleted_at'];
}
