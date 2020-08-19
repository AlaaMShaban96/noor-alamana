<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id', 'admin_id', 'image',
    ];

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

    public function category()
    {
        return $this->belongsTo('App\Categories');
    }

    public function ItemTranslation()
    {
        return $this->hasMany('App\ItemsTranslation');
    }
}
