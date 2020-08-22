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
        return $this->belongsTo(Footer::class);
    }

    public function ourAddressTranslation()
     {
         return $this->hasMany(OurAddressTranslation::class);
     }

     public function job()
    {
        return $this->hasMany(Job::class);
    }
}
