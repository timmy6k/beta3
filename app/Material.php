<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name',
        'description',
        'material_type_id',
        'created_by',
        'approved_by',
        'updated_by',
        'status'
    ];
}
