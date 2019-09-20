<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addroom extends Model
{
     protected $table ='addrooms';
    //primary key
    public $primaryKey ='id';
    //timestamp
    public $timestamp=true;
    
    public function user(){
        
        return $this->belongsTo('App\User');
    }
}
