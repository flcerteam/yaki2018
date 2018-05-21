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
            $table->integer('id')->unsigned()->unique();;
            $table->string('name', 255)->nullable()->default(null);
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