<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    // relationships with user
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    // relationships with categories
    public function categoty()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }
}
