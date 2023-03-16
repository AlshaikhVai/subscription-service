<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserWebHook extends Model
{
    protected $table = "user_webhooks";
    protected $fillable = [
        'url'
    ];

    protected $hidden = [
        'secret_key',
    ];
}
