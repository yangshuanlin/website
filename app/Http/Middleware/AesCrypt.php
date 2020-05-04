<?php

namespace App\Http\Middleware;

use Closure;

class AesCrypt
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $checkArr=['POST','PUT','DELETE'];
        if(in_array($request->method(),$checkArr)){
            try{
                $res=$this->deCrypt($request->input('d'));
                $temp=json_decode($res,true);
                if($temp){
                    foreach ($temp as $k=>$vo){
                        $request->offsetSet($k,$vo);
                    }
                }

            }catch (\Exception $E){
                return response()->json($E->getMessage(),$E->getCode());
            }
        }
        return $next($request);
    }
    public function deCrypt($str){
        $arr=json_decode(base64_decode($str),true);
        if(is_array($arr) && isset($arr['a']) && isset($arr['b'])&& isset($arr['d']) && isset($arr['t'])){
            $expire=config('app.auth_expire');
            $t = intval($arr['t']/1000)+$expire;
            if($t>= time()){
               return rtrim(openssl_decrypt($arr['d'],'AES-128-CBC',$arr['a'],OPENSSL_ZERO_PADDING,$arr['b']));
            }else{
                throw new \Exception('签名失效！',403);
            }
        }else{
            throw new \Exception('签名错误！',403);
        }
    }
}
