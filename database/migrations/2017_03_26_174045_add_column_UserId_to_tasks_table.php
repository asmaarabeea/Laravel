<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnUserIdToTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table("tasks", function (Blueprint $table) {
    		$table->integer('UserId')->unsigned()->nullable;
//     		$table->foreign('UserId')->references('id')->on('users')->onDelete('cascade');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table("tasks", function (Blueprint $table) {
    		$table->dropcolumn('UserId');
    	});
    }
}
