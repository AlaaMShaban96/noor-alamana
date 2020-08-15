<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurPartnersTranslation extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'our_partners_id', 'language_code', 'name','description',
    ];

    public function ourPartners()
    {
        return $this->belongsTo('App\OurPartners');
    }

    public function language()
    {
        return $this->belongsTo('App\Language');
    }
}
