<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\AesCrypt;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    //
    protected $data;
    public function __construct(Request $request)
    {
        $aes=new AesCrypt();
        $checkArr=['POST','PUT','DELETE'];
        if(in_array($request->method(),$checkArr)){
            $input= $aes->deCrypt($request->input('d'));
            $inputArr=json_decode($input,true);
            $this->data=$inputArr;
        }
    }
}
