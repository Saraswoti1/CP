<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addtrans extends Model
{
    protected $table ='addtrans';
    //primary key
    public $primaryKey ='id';
    //timestamp
    public $timestamp=true;
    
    public function user(){
        
        return $this->belongsTo('App\User');
    }
}
