<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'our_address_id', 'gender',
    ];

    public function ourAddress()
    {
        return $this->belongsTo('App\OurAddress');
    }

    public function JobsTranslation()
    {
        return $this->hasMany('App\JobsTranslation');
    }

    public function recruitmentForm()
    {
        return $this->hasMany('App\RecruitmentForm');
    }
}
