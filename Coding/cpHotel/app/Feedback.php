<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    //table name
    protected $table ='posts';
    //primary key
    public $primaryKey ='id';
    //timestamp
    public $timestamp=true;
    
    public function user(){
        
        return $this->belongsTo('App\User');
}
}