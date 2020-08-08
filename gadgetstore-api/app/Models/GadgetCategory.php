<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GadgetCategory extends Model
{
    public $table = 'gadget_category';
    protected $fillable = ['gadget_id', 'category_id'];
}
