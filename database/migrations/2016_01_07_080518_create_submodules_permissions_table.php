<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmodulesPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submodules_permissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('submodule_id')->unsigned();
            $table->integer('permission_id')->unsigned();
            
            $table->foreign('submodule_id')
                    ->references('id')->on('submodules')
                    ->onDelete('cascade');
            $table->foreign('permission_id')
                    ->references('id')->on('permissions')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('submodules_permissions');
    }
}
