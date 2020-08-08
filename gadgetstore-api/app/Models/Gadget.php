<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gadget extends Model
{
    protected $fillable = ['merk', 'slug', 'description', 'seller', 'cover', 'price', 'stock', 'status'];
    
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category');
    }
}
