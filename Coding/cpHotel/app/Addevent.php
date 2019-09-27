<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addevent extends Model
{
     protected $table ='addevents';
    //primary key
    public $primaryKey ='id';
    //timestamp
    public $timestamp=true;
    
    public function user(){
        
        return $this->belongsTo('App\User');
    }
}
