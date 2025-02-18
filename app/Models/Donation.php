<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $table = 'donations';

    protected $fillable = [
        'donator_name', 'donator_email', 'donator_phone', 
        'donator_address', 'donator_city', 'screen_shot'
    ];
}
