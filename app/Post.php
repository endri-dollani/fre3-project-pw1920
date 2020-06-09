<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table ='posts';
    //Primary Key
    protected $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;

    //Creating relationship 1 posts belongs to 1 user
    public function user(){
        return $this->belongsTo('App\User');
    }

  
}
