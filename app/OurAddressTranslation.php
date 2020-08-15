<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OurAddressTranslation extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'ouraddress_id', 'language_code', 'name',
    ];

    public function ourAddress()
    {
        return $this->belongsTo('App\OurAddress');
    }

    public function language()
    {
        return $this->belongsTo('App\Language');
    }
}
