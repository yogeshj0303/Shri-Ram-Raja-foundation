<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['event_title', 'event_image', 'event_desc'];

    // Add any additional model methods or relationships here
}