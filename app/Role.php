<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    //protected $table = 'roles';

    public function permissions(){
        return $this->belongsToMany('App\Permission');
    }
}
