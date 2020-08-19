<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurAddress extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'footer_id', 'location',
    ];

    public function footer()
    {
        return $this->belongsTo('App\Footer');
    }

    public function ourAddressTranslation()
     {
         return $this->hasMany('App\OurAddressTranslation');
     }

     public function jobs()
    {
        return $this->hasMany('App\Jobs');
    }
}
