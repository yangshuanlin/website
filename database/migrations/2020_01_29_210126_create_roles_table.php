<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_general_ci';
            $table->string('name',20)->unique()->comment('角色名称');
            $table->string('others',200)->comment('备注');
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
        Schema::dropIfExists('roles');
    }
}
