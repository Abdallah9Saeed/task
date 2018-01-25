<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pkey');
            $table->integer('account');
            $table->text('name');
            $table->string('list');
            $table->timestamp('created');
            $table->timestamp('due');
            $table->tinyInteger('status')->nullable();
            $table->tinyInteger('archived')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
