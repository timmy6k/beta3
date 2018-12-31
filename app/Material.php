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
        'status',
        'rejected_by',
        'authorized'
    ];

    public function createdby(){
        return $this->belongsTo('App\User', 'created_by', 'id');
    }

    public function updatedby(){
        return $this->belongsTo('App\User', 'updated_by', 'id');
    }

    public function approvedby(){
        return $this->belongsTo('App\User', 'approved_by', 'id');
    }







}
