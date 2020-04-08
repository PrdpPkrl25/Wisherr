<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    protected $table='senders';
    protected $fillable=['user_id','name','email','phone'];



}
