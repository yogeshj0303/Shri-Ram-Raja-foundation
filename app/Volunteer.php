<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    protected $fillable = ['name', 'designation', 'photo', 'email','phone', 'address', 'occupation', 'message', 'facebook', 'google_plus', 'twitter', 'linkedin', 'status'];
    public $timestamps = false;
}
