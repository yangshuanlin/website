<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;

class AdminLoginCheck extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        $fingerPrint=Request::fingerprint();
        $key=$fingerPrint."_login_error";
        $num=Cache::get($key,0);
        if($num && $num>=100){
           return false;
        }
        if(Cache::has($key)){
            Cache::increment($key);
        }else{
            Cache::add($key,$num+1,3600);
        }
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|alpha_num|between:5,20',
            'password' => 'required|min:6'
        ];
    }
    public function messages()
    {
        return [
            'username.required'=>'请填写用户名',
            'username.alpha_num'=>'用户名只能是字母和数字',
            'username.between' => '用户名长度为5-10位',
            'password.required' => '请填写密码',
            'password.min'     => '密码长度不足！'
        ];
    }
}
