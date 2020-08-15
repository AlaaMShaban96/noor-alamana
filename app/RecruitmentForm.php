<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecruitmentForm extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'job_id', 'city_id', 'fname','lname','email','phone','address','cvfile',
    ];
 
    public function Jobs()
     {
         return $this->belongsTo('App\Jobs');
     }

     public function city()
     {
         return $this->belongsTo('App\City');
     }
}
