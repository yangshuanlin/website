<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\AdminLoginCheck;
use App\Model\Admins;

class LoginController extends BaseController
{
    //
    public function index() {
        return view('admin.login');
    }
    public function checkAdmin(AdminLoginCheck $request){
        try{
            $adminModel=new Admins();
            $adminModel->checkLogin($request->post('username'),$request->post('password'));
        }catch (\Exception $e){
            dump($e->getMessage());exit;
        }
    }
}
