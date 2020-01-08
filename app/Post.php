<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //data to send to controller
    function data(){
    return ['name'=>'Abdullah','email'=>'email@email','contact'=>'0301','city'=>'khi','country'=>'pakistan'];
    }

}
