<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //table name
    protected $table ='galleries';
    //primary key
    public $primaryKey ='id';
    //timestamp
    public $timestamp=true;
    
    public function user(){
        
        return $this->belongsTo('App\User');
}
}