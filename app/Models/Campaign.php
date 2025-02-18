<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = ['campaign_title', 'campaign_image', 'campaign_desc'];

    // Add any additional model methods or relationships here
}