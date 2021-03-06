<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function photos()
    {
    	return $this->hasMany(ProductPhoto::class);
    }
}
