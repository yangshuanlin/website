@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{asset('static/admin/css/login.css')}}">
@endsection
@section('content')
    <div class="layui-layui-fluid layui-bg-blue login">
        <div class="layui-row login-row">
            <div class="layui-col-lg3 layui-anim-scale ">
                <h1 class="layui-field-title" style="text-align: center; line-height: 100px;">{{config('app.name')}}后台管理中心</h1>
                <form class="layui-form login-center" action="javascript:void(0)" >
                    @csrf
                    <div class="layui-form-item">
                        <label class="layui-form-label">用户名：</label>
                        <div class="layui-input-block">
                            <input type="text" name="username" lay-verify="title" autocomplete="off" placeholder="请输入用户名" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">密码：</label>
                        <div class="layui-input-block">
                            <input type="password" name="password" placeholder="请输入密码" autocomplete="off" class="layui-input" lay-verify="pass">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">滑动验证：</label>
                        <div class="layui-input-block">
                            <div id="slider"></div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <div class="layui-input-block">
                            <button type="submit" class="layui-btn" lay-submit="" lay-filter="login">登录</button>
                            <button type="button" class="layui-btn layui-btn-danger" style="float:right" id="back">返回首页</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="layui-col-lg12">
                @include('admin.footer')
            </div>
        </div>
    </div>
@endsection
@section('js')
  <script type="application/javascript">

    layui.config({
      base: '/layui/'
    }).use(['form','sliderVerify','jquery'], function(){
      var form = layui.form
        ,$=layui.jquery
        ,layer = layui.layer;
      var sliderVerify = layui.sliderVerify;
      var slider = sliderVerify.render({
        elem: '#slider'
      })
      //自定义验证规则
      form.verify({
        title: function(value){
          if(value.length < 5){
            return '用户名错误！';
          }
        }
        ,pass: [
          /^[\S]{6,100}$/
          ,'密码至少6位，且不能出现空格'
        ]
      });

      layui.$('#back').on('click', function(){
        location.href= window.location.protocol+"//"+window.location.host;
      });
      //监听提交
      form.on('submit(login)', function(data){
        if(slider.isOk()){
          let datas=encode(JSON.stringify(data.field));
          $.ajax({
            type:'post',
            url:'check',
            data:{'d':datas},
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (e) {
              console.log(e)
            }
          })
          return false;
        }else{
          layer.msg('请拖动滑块验证');
        }
        return false;
      });
    });

  </script>
@endsection
