<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //table name
    protected $table ='rooms';
    //primary key
    public $primaryKey ='id';
    //timestamp
    public $timestamp=true;
    
    public function user(){
        
        return $this->belongsTo('App\User');
}
}