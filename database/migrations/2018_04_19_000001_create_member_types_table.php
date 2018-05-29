<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTypesTable extends Migration
{
    /**
     * Run the migrations.
     * @table member_types
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('member_types', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned()->unique();
            $table->string('name', 255)->nullable()->default(null);
            $table->integer('point_from')->unsigned()->default(0);
            $table->integer('point_to')->unsigned()->default(0);
            $table->integer('percent_discount')->unsigned()->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('member_types');
     }
}