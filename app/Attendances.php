<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
    protected $table = 'attendances';

    protected $fillable = ['user_id','absent_from','absent_to','cutoff','attachment','created_at','updated_at'];
}
