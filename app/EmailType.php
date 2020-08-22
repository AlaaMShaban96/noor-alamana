<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailType extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'icon',
    ];

    public function email()
    {
        return $this->hasMany(Email::class);
    }
}
