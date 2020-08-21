<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
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
        return $this->belongsTo(Admin::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function itemTranslation()
    {
        return $this->hasMany(ItemTranslation::class);
    }
}
