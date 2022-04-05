<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'keywords',
        'image',
        'excerpt',
        'description'
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
