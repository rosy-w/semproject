<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $primaryKey = 'category_id';
    public function item()
    {
        return $this->hasMany(Item::class);
    }
    public function getRouteKeyName()
    {
    return 'name';
    }

}
