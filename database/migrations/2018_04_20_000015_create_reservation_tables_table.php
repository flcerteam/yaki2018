<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTablesTable extends Migration
{
    /**
     * Run the migrations.
     * @table reservation_tables
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_tables', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('reservation_no', 20)->nullable()->default(null);
            $table->integer('member_id')->unsigned();
            $table->integer('branch_id')->unsigned();
            $table->tinyInteger('reservation_type')->unsigned();
            $table->date('reservation_date')->nullable()->default(null);
            $table->string('reservation_hour', 5)->nullable()->default(null);
            $table->integer('number_of_people')->unsigned();
            $table->longText('note')->nullable()->default(null);
            $table->integer('status_id')->unsigned();
            $table->nullableTimestamps();

            $table->foreign('member_id')
                ->references('id')->on('members')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('branch_id')
                ->references('id')->on('branches')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('status_id')
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
       Schema::dropIfExists('reservation_tables');
     }
}
