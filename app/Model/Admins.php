<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admins extends Model
{
    public  function getData($where,$field=['id','name','password']){
       return self::where($where)->select($field)->get();
    }
    public function checkLogin($username,$password){
       $res= $this->getData(['name'=>$username]);
       dump($res);
    }
}
