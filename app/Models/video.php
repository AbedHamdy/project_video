<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function coverImage()
    {
        return $this->hasOne(Image::class)->where('type', 'cover');
    }

    public function contentImages()
    {
        return $this->hasMany(Image::class)->where('type', 'content');
    }

}
