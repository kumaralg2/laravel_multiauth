<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
      protected $fillable = [
        'user_name', 'user_email', 'user_subject','user_message'
    ];
}
