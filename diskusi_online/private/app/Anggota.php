<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $table = 'users';
    protected $fillable = ['name', 'email'. 'username', 'email_verified_at', 'password', 'filename'];
}
