<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'medias';
    protected $fillable = ['type', 'file_path', 'video_link'];

    // Add any additional model methods or relationships here
}