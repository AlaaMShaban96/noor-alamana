<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image','admin_id',
    ];

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function categoryTranslation()
    {
        return $this->hasMany('App\CategoriesTranslation');
    }

    public function item()
    {
        return $this->hasMany('App\Items');
    }
}
