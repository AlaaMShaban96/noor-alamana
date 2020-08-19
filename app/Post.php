<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_id', 'type', 'image','file','created_at',
    ];

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function postsTranslation()
    {
        return $this->hasMany('App\PostsTranslation');
    }
}
