<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    //table name
    protected $table ='laundries';
    //primary key
    public $primaryKey ='id';
    //timestamp
    public $timestamp=true;
    
    public function user(){
        
        return $this->belongsTo('App\User');
}
}
