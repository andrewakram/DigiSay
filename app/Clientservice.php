<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Clientservice extends Model
{
    use SoftDeletes;

    /*protected $primaryKey = 's_id';
    protected $table = 'services';
    protected $fillable = ['s_id','s_name','mainservice_id'];
    protected $date = ['delete_at'];
    protected $hidden = ["deleted_at"];*/
}
