<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GadgetOrder extends Model
{
    public $table = 'gadget_order';
    protected $fillable = ['gadget_id', 'order_id', 'quantity'];
}
