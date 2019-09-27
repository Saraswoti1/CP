<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contactus extends Model
{
     protected $table ='contactus';
    //primary key
    public $primaryKey ='id';
    //timestamp
    public $timestamp=true;
    
    public function user(){
        
        return $this->belongsTo('App\User');
    }
}
