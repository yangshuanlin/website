<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends BaseController
{
    //
    public function index() {
        return view('admin.login');
    }
    public function checkAdmin(){
        dump($this->data);exit;
    }
}
