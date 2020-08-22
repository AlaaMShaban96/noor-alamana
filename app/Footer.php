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
        return $this->hasMany(OurAddress::class);
    }

    public function phoneNumber()
    {
        return $this->hasMany(PhoneNumber::class);
    }

    public function email()
    {
        return $this->hasMany(Email::class);
    }
}
