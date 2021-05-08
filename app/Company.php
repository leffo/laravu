<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

<<<<<<< HEAD
/**
 * App\Company
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @mixin \Eloquent
 */
=======
>>>>>>> 4b417c0fd3a41c3c9cba0f8cfcc480c953ed78af
class Company extends Model
{
    // поля доступные для заполнения
    protected $fillable = ['name', 'address', 'website', 'email'];
}
