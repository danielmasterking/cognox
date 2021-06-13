<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApiUsage extends Model
{
    protected $table = 'api_usage';

    protected $fillable = [
        'date_usage', 'user_id'
    ];
}
