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
        return $this->hasMany('App\ItemsTranslation');
    }

    public function slideTranslation()
    {
        return $this->hasMany('App\SlideTranslation');
    }

    public function ourPartnersTranslation()
    {
        return $this->hasMany('App\OurPartnersTranslation');
    }

    public function ourAddressTranslation()
    {
        return $this->hasMany('App\OurAddressTranslation');
    }

    public function postsTranslation()
    {
        return $this->hasMany('App\PostsTranslation');
    }

    public function JobsTranslation()
    {
        return $this->hasMany('App\JobsTranslation');
    }
}
