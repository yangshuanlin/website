<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\AesCrypt;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    //
    public function  index(){
        $aes=new AesCrypt();
        $aes->deCrypt();
        echo '11';exit;
    }
}
