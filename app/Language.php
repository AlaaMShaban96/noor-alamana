<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code', 'name',
    ];
    
    public function categoryTranslation()
    {
        return $this->hasMany(CategoryTranslation::class);
    }

    public function ItemTranslation()
    {
        return $this->hasMany(ItemsTranslation::class);
    }

    public function slideTranslation()
    {
        return $this->hasMany(SlideTranslation::class);
    }

    public function ourPartnersTranslation()
    {
        return $this->hasMany(OurPartnersTranslation::class);
    }

    public function ourAddressTranslation()
    {
        return $this->hasMany(OurAddressTranslation::class);
    }

    public function postTranslation()
    {
        return $this->hasMany(PostTranslation::class);
    }

    public function JobTranslation()
    {
        return $this->hasMany(JobTranslation::class);
    }
}
