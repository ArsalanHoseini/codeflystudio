<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VerificationCode extends Model
{
    protected $fillable = ['identifier', 'code', 'expires_at'];

    protected $dates = ['expires_at'];
}

