<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //relationships with photos
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

    //relationships with color
    public function color()
    {
        return $this->belongsTo(Color::class)->withDefault();
    }
}
