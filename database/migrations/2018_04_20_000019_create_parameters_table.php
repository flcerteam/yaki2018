<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParametersTable extends Migration
{
    /**
     * Run the migrations.
     * @table parameters
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parameters', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('param_id', 100);
            $table->string('name', 500)->nullable()->default(null);
            $table->longText('content')->nullable()->default(null);
            $table->nullableTimestamps();

            $table->unique(["param_id"], 'unique_param_ids');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('parameters');
     }
}