<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Roles extends Model
{
    //
    public $timestamps=false;
    protected $tag = 'AdminRolesTable';

    /**
     * @param array $data
     * @return bool|string
     */
    public function add (array $data){
       foreach ($data as  $k => $v){
           $this->$k =$v;
       }
       $this->create_at = $this->update_at =time();
       $this->save();
       Cache::forget(md5('AdminRoles'));
       return true;
    }
}
