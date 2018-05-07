<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRtStatusHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     * @table rt_status_histories
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('rt_status_histories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('rt_id')->unsigned();
            $table->integer('status')->unsigned();
            $table->nullableTimestamps();

            $table->foreign('rt_id')
                ->references('id')->on('reservation_tables')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('status')
                ->references('id')->on('rt_statuses')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('rt_status_histories');
     }
}