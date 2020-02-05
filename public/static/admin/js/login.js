
layui.use(['form'], function(){
  var form = layui.form
    ,layer = layui.layer

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

  //监听提交
  form.on('submit(login)', function(data){
    layer.alert(JSON.stringify(data.field), {
      title: '最终的提交信息'
    })
    return false;
  });

  //表单取值
  layui.$('#back').on('click', function(){
    location.href= window.location.protocol+"//"+window.location.host;
  });

});
