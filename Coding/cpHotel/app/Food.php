<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //table name
    protected $table ='foods';
    //primary key
    public $primaryKey ='id';
    //timestamp
    public $timestamp=true;
    
    public function user(){
        
        return $this->belongsTo('App\User');
    }
}
