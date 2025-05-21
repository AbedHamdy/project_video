<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;

    protected $fillable = [
        'link',
        'title',
        'description',
        'feature',
        'user_name',
        'content'
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function coverImage()
    {
        return $this->hasOne(image::class)->where('type', 'cover');
    }

    public function contentImages()
    {
        return $this->hasMany(image::class)->where('type', 'content');
    }

    public function images()
    {
        return $this->hasMany(image::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }


}
