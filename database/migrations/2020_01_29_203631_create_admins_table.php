<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_general_ci';
            $table->string('name',20)->unique()->comment('用户名');
            $table->string('password',100)->comment('密码');
            $table->char('mobile',11)->comment('电话号码');
            $table->string('email',50)->comment('邮箱');
            $table->unsignedInteger('role_id')->comment('角色id');
            $table->bigInteger('create_at')->comment('创建时间');
            $table->bigInteger('update_at')->comment('数据修改时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
