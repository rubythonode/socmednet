<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubmodulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('submodules', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('module_id')->unsigned();
            $table->string('code', 20);
            $table->string('name');
            $table->text('description')->nullable();
            
            $table->foreign('module_id')
                    ->references('id')->on('modules')
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
        Schema::drop('submodules');
    }
}
