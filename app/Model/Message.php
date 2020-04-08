<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $table='messages';
    protected $fillable=['sender_id','receiver_id','template_id','message_content','user_id','message_date','message_time'];



}
