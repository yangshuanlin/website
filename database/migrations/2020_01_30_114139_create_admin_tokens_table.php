<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_tokens', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_general_ci';
            $table->unsignedInteger('admin_id')->comment('管理员id');
            $table->unsignedBigInteger('create_at')->comment('创建时间');
            $table->unsignedBigInteger('limit_at')->comment('有效时间');
            $table->char('token',32)->comment('token令牌');
            $table->unsignedBigInteger('ip')->comment('客户端ip');
            $table->string('flag',500)->comment('客户端标识');
            $table->primary(['admin_id','token']);
            $table->foreign('admin_id')->on('admins')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_tokens');
    }
}
