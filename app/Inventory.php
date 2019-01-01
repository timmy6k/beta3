<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'material_id',
        'quantity',
        'user_id'
    ];

    public function material()
    {
        return $this->belongsTo('App\Material');
    }










}
