<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Accounts extends Model
{
    #[Fillable]
    protected $fillable = [
        'lms_id_no',
        'name',
        'email',
        'username',
        'password',
        'role'
    ];
}
