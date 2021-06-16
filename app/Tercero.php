<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    protected $table = 'terceros';
    protected $fillable = [
        'name', 
        'identification', 
        'account_number', 
        'id_user_assigned ', 
        'created_at', 
        'updated_at', 
    ];
}
