<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
    ];

    public function slideTranslation()
    {
        return $this->hasMany(SlideTranslation::class);
    }
}
