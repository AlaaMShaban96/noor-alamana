<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'post_id', 'language_code', 'title','content',
    ];
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function language()
    {
        return $this->belongsTo(Language::class);
    }
}
