<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
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
        return $this->belongsTo(Admin::class,'admin_id');
    }

    public function categoryTranslation()
    {
        return $this->hasMany(CategoryTranslation::class);
    }

    public function item()
    {
        return $this->hasMany(Items::class);
    }
}
