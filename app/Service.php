<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $primaryKey = 's_id';
    protected $table = 'services';
    protected $fillable = ['s_title','s_type'];
    protected $date = ['delete_at'];
    protected $hidden = ["deleted_at"];
}
