<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRtTypesTable extends Migration
{
    /**
     * Run the migrations.
     * @table rt_types
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('rt_types', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned()->unique();;
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
       Schema::dropIfExists('rt_types');
     }
}