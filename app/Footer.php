<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 
    ];

    public function ourAddress()
    {
        return $this->hasMany('App\OurAddress');
    }

    public function phoneNumbers()
    {
        return $this->hasMany('App\PhoneNumbers');
    }

    public function emails()
    {
        return $this->hasMany('App\Emails');
    }
}
