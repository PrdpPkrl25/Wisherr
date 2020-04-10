<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    protected $table = 'receivers';
    protected $fillable=['name','email','phone'];

    public function messages(){
        return $this->hasMany(Message::class);

    }

}
