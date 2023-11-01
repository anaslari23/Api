<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class UserModel extends Model
{
    use HasFactory;
    // protected $table = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
        'Course',
        'Stream',
        'external_id',
        'confirm_password',
    ];

    protected $hidden = [
        'password',
        'deleted_at',
    ];

    public $timestamps = true;
}

