<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     * @table branches
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255)->nullable()->default(null);
            $table->string('description', 1000)->nullable()->default(null);
            $table->string('address', 255)->nullable()->default(null);
            $table->string('owner', 100)->nullable()->default(null);
            $table->string('phone_number', 20)->nullable()->default(null);
            $table->string('email', 255)->nullable()->default(null);
            $table->string('open_hour', 20)->nullable()->default(null);
            $table->string('close_hour', 20)->nullable()->default(null);
            $table->string('location', 1000)->nullable()->default(null);
            $table->tinyInteger('active');

            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('branches');
     }
}
