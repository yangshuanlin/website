<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginCheck;
use Illuminate\Http\Request;

class LoginController extends BaseController
{
    //
    public function index() {
        return view('admin.login');
    }
    public function checkAdmin(Request $request){
       $data=$request->input('d');
    }
}
