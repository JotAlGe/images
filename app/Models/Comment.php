<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'user_id', 'photo_id'];

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    // belongs to photo
    public function photo()
    {
        return $this->belongsTo(Photo::class)->withDefault();
    }
}
