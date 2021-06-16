<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Account_history extends Model
{
    protected $table = 'account_history';
    protected $fillable = [
        'account_number', 
        'amount', 
        'movement', 
        'date', 
        'created_at', 
        'updated_at', 
        'account_number_current'
    ];
}
