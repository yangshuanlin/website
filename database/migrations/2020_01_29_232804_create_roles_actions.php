<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesActions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_actions', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->charset='utf8';
            $table->collation='utf8_general_ci';
            $table->unsignedInteger('role_id')->comment('角色id');
            $table->unsignedInteger('action_id')->comment('菜单id');
            $table->primary(['role_id','action_id']);
            $table->foreign('role_id')->on('roles')->references('id');
            $table->foreign('action_id')->on('actions')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_actions');
    }
}
