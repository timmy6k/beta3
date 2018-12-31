<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'created_by',
        'approved_by',
        'material_id',
        'status',
        'expiration_date',
        'quantity'
    ];
}
