<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
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
        return $this->belongsTo(OurAddress::class);
    }

    public function JobTranslation()
    {
        return $this->hasMany(JobTranslation::class);
    }

    public function recruitmentForm()
    {
        return $this->hasMany(RecruitmentForm::class);
    }
}
