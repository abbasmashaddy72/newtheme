<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_id',
        'title',
        'image',
        'tags',
        'excerpt',
        'description'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
