<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
        protected $table='events';
        protected $fillable=['event_name','event_date','user_id'];



}
