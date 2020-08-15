<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideTranslation extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slide_id', 'language_code', 'name','description',
    ];

    public function slide()
    {
        return $this->belongsTo('App\Slide');
    }
    
    public function language()
    {
        return $this->belongsTo('App\Language');
    }
}
