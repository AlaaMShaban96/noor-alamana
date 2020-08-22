<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PhoneNumber extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'footer_id', 'number', 
    ];

    public function footer()
    {
        return $this->belongsTo(Footer::class);
    }
}
