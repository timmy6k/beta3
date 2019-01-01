<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function materials()
    {
        return $this->hasMany('App\Material', 'user_id', 'id');
    }







//    public function materialrole(){
//        return $this->belongsTo('App\Tablerole', 'material_role', 'id');
//    }
//
//
//
//    public function inventoryrole(){
//        return $this->belongsTo('App\Tablerole', 'inventory_role', 'id');
//    }
//
//    public function mprrole(){
//        return $this->belongsTo('App\Tablerole', 'mpr_role', 'id');
//    }
//
//    public function bprrole(){
//        return $this->belongsTo('App\Tablerole', 'bpr_role', 'id');
//    }
//
//    public function userrole(){
//        return $this->belongsTo('App\Role', 'user_role', 'id');
//    }
//
//    public function createdby(){
//        return $this->belongsTo('App\User', 'created_by', 'id');
//    }
//
//
//    public function isAdmin(){
//
//        if($this->userrole->name == "admin" or $this->userrole->name == "dev" or $this->userrole->name == "waffle" && $this->is_active==1){
//
//
//            return true;
//
//        }
//        return false;
//    }
//
//    public function isSuperAdmin(){
//
//        if($this->userrole->name == "super admin" or $this->userrole->name == "dev" or $this->userrole->name == "waffle" && $this->is_active==1){
//
//
//            return true;
//
//        }
//        return false;
//    }
//
//    public function isActive(){
//
//        if($this->user_role != 1 && $this->is_active==1){
//
//
//            return true;
//
//        }
//        return false;
//    }
//
//    public function isDev(){
//
//        if($this->userrole->name == "dev" or $this->userrole->name == "waffle" && $this->is_active==1){
//
//
//            return true;
//
//        }
//        return false;
//    }
//
//
//
//
//    public function isMaterialAuthor(){
//
//        if($this->materialrole->name == "author" or $this->materialrole->name == "full" && $this->is_active==1){
//
//
//            return true;
//
//        }
//        return false;
//    }








}
