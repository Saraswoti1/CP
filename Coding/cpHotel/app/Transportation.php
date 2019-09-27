<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    //table name
    protected $table ='transportations';
    //primary key
    public $primaryKey ='id';
    //timestamp
    public $timestamp=true;
    
 public function user(){
        
       return $this->belongsTo('App\User');
}
}