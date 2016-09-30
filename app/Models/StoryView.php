<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StoryView extends Model
{
    public $fillable = ['story_id', 'ip_address', 'viewer_id', 'viewer_name'];

    public function story()
    {
        return $this->belongsTo(Story::class);
    }
}
