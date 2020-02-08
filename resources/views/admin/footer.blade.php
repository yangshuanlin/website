<style>
.js19-admin-footer{
    text-align: center;
    line-height: 30px;
    margin-top: 30px;
    box-sizing: border-box;
}
    .js19-admin-footer>p{
        width: 100%;
    }
    .js19-admin-footer>p>a{
        color: #fff9ec;
        margin-right: 1em;
    }
.js19-admin-footer>p>a:hover{
    color: #3F3F3F;
}
</style>
<div class="layui-footer js19-admin-footer layui-layer-padding">
   <p> &copy; 2019-2020 <a href="{{config('app.url')}}" target="_blank">{{config('app.name')}}</a>版权所有</p>
    <p><a href="http://www.beian.miit.gov.cn" target="_blank">{{config('app.beian')}}</a></p>
</div>
