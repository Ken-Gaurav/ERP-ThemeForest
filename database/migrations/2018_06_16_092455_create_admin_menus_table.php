<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_menu', function (Blueprint $table) {
             $table->increments('admin_id');
            $table->string('parent_id');
            $table->string('title');
            $table->string('route')->nullable();
            $table->string('icon');
            $table->tinyInteger('status');
            $table->softdeletes();
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('admin_menu');
    }
}
