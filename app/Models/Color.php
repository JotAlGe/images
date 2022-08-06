<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = ['description'];

    // relationships with categories
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
}
