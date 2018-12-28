<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialType extends Model
{
    protected $fillable = ['name', 'created_by', 'updated_by'];
}
