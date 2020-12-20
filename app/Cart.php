<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function items()
    {
        return $this->belongsToMany(Item::class)->withPivot('quantity', 'total_price')->withTimestamps();
        
    }
}
