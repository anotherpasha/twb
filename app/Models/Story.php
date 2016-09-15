<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = ['user_id', 'title', 'story', 'image_path', 'thumbnail_path'];

    protected $dates = ['created_at'];

    public function likes()
    {
        return $this->hasMany(StoryLike::class);
    }

    public function views()
    {
        return $this->hasMany(StoryView::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
