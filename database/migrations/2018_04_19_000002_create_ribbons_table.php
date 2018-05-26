<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRibbonsTable extends Migration
{
    /**
     * Run the migrations.
     * @table ribbons
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('ribbons', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('id')->unsigned()->unique();;
            $table->string('name', 255)->nullable()->default(null);
            $table->string('css_class', 255)->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('ribbons');
     }
}