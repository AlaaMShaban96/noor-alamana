<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoriesTranslation extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 'language_code', 'name','description',
    ];

    public function category()
    {
        return $this->belongsTo('App\Categories');
    }

    public function language()
    {
        return $this->belongsTo('App\Language');
    }
}
