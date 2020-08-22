<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurPartners extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image',
     ];

     public function ourPartnersTranslation()
     {
         return $this->hasMany(OurPartnersTranslation::class);
     }
}
