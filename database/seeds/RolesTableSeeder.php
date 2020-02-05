<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $model= new \App\Model\Roles();
        $model->add([
           'id' => 1,
            'name'  => '超级管理员',
            'others' => '至少保留一个'
        ]);
    }
}
