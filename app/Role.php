<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name', 'created_by', 'updated_by'];


    public function createdby(){
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function updatedby(){
        return $this->belongsTo('App\User', 'updated_by', 'id');
    }

}
