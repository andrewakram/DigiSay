<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;

    protected $primaryKey = 'c_id';
    protected $table = 'clients';
    protected $fillable = ['c_title','c_description','c_status',
        'c_contactPhone','c_contactStartDate','c_contactEndDate'];
    protected $date = ['delete_at'];
    protected $hidden = ["deleted_at"];
}
