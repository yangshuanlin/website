@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{asset('static/admin/css/login.css')}}">
@endsection
@section('content')
    <div class="layui-layui-fluid layui-bg-blue login">
        <div class="layui-row login-row">
            <div class="layui-col-lg3 layui-anim-scale ">
                <h1 class="layui-field-title" style="text-align: center; line-height: 100px;">{{config('app.name')}}后台管理中心</h1>
                <form class="layui-form login-center" >
                    <div class="layui-form-item">
                        <label class="layui-form-label">用户名：</label>
                        <div class="layui-input-block">
                            <input type="text" name="username" lay-verify="title" autocomplete="off" placeholder="请输入用户名" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码：</label>
                        <div class="layui-input-block">
                            <input type="password" name="password" placeholder="请输入密码" autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button type="submit" class="layui-btn" lay-submit="" lay-filter="login">登录</button>
                            <button type="button" class="layui-btn layui-btn-danger" id="back">返回首页</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="application/javascript" src="{{asset('static/admin/js/login.js')}}"></script>
@endsection
