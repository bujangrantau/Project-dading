<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class career extends Model
{
    protected $primaryKey = 'username';
    protected $fillable = ['username', 'email', 'password'];
}
