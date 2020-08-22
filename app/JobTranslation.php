<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'job_id','language_code','name','description','responsibility','qualification','experience','skills',
     ];

     public function language()
     {
         return $this->belongsTo(Language::class);
     }
 
     public function Job()
     {
         return $this->belongsTo(Job::class);
     }
}
