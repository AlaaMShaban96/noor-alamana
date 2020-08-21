<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemTranslation extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id', 'language_code', 'name',
    ];

    public function language()
    {
        return $this->belongsTo(Language::class);
    }

    public function Item()
    {
        return $this->belongsTo(Item::class);
    }
}
