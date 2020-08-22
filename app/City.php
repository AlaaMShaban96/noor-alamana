<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    //
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function recruitmentForm()
    {
        return $this->hasMany(RecruitmentForm::class);
    }
}
