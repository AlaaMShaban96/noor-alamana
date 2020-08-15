<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailsType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'icon',
    ];

    public function emails()
    {
        return $this->hasMany('App\Emails');
    }
}
