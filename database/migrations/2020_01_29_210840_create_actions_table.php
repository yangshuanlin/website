<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actions', function (Blueprint $table) {
            $table->increments('id');
            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_general_ci';
            $table->string('name')->comment('菜单名称');
            $table->unsignedInteger('pid')->default(0)->comment('父级id');
            $table->string('uri')->comment('路由');
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
        Schema::dropIfExists('actions');
    }
}
