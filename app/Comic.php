<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = ['title', 'type', 'price', 'description', 'thumb', 'series','sale_date'];
}
