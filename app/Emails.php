<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'footer_id', 'email_type_id', 'email',
    ];

    public function footer()
    {
        return $this->belongsTo('App\Footer');
    }

    public function emailsType()
    {
        return $this->belongsTo('App\EmailsType');
    }
}
