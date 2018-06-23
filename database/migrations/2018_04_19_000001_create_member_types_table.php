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
            $table->increments('id');
            $table->string('name', 255)->nullable()->default(null);
            $table->decimal('point_from', 10, 0)->nullable()->default(0);
            $table->decimal('point_to', 10, 0)->nullable()->default(0);
            $table->decimal('percent_discount', 2, 0)->nullable()->default(0);

            $table->unique(["name"], 'unique_member_types');
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