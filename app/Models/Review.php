<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $fillable = [
        'service_id',
        'name',
        'video_url',
        'message',
        'image',
        'stars'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
