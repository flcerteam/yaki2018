<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRtStatusesTable extends Migration
{
    /**
     * Run the migrations.
     * @table rt_statuses
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('rt_statuses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned();
            $table->string('name', 50)->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('rt_statuses');
     }
}