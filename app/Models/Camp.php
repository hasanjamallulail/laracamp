<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\SoftDeletes;


class Camp extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['tilte', 'price'];
}