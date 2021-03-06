<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    
    //table name
    protected $table ='events';
    //primary key
    public $primaryKey ='id';
    //timestamp
    public $timestamp=true;
    
    public function user(){
        
        return $this->belongsTo('App\User');
    }
}
