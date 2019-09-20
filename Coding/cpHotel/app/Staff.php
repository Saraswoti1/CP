<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //table name
    protected $table ='staff';
    //primary key
    public $primaryKey ='id';
    //timestamp
    public $timestamp=true;
    
    public function user(){
        
        return $this->belongsTo('App\User');
}
} 