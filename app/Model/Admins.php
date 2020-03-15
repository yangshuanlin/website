<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    public  function getData($where){
        self::where($where)->find();
    }
}
