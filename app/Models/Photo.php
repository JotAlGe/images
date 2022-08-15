<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
        'category_id',
        'user_id'
    ];

    // relationships with user
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    // relationships with categories
    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }

    // relation with comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
