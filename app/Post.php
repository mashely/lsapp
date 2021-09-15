<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //if you to change the table you write here but in plural
    protected $table = 'posts';
    // if you want to change the primarykey you write here
    public $primarykey = 'id';
    //if you want to track timestemps
    public $timestemps = 'true';

    public function user(){
        return $this->belongsto('App\user');
    }
}
