<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_user', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_general_ci';
            $table->increments('id');
            $table->char('app_id',16)->comment('app_id');
            $table->string('app_secret',32)->comment('秘钥');
            $table->string('app_key',40)->comment('加密解密key');
            $table->bigInteger('create_time')->comment('添加时间');
            $table->bigInteger('update_time')->comment('修改时间');
            $table->bigInteger('limit_time')->comment('有效时间');
            $table->tinyInteger('type')->default(2)->comment("1：后台；2：user;3:商家");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_user');
    }
}
