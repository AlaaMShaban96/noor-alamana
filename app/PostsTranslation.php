<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostsTranslation extends Model
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
        return $this->belongsTo('App\Post');
    }

    public function language()
    {
        return $this->belongsTo('App\Language');
    }
}
