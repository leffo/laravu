<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // поля доступные для заполнения
    protected $fillable = ['name', 'address', 'website', 'email'];
}
