<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    protected $table = 'receivers';
    protected $fillable=['user_id'];

}
