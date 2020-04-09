<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table='messages';
    protected $fillable=['sender_id','event_id','receiver_id','message_content','message_time'];



}
