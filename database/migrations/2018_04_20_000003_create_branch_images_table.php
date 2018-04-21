<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchImagesTable extends Migration
{
    /**
     * Run the migrations.
     * @table branch_images
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_images', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('branch_id')->unsigned();
            $table->string('name', 100)->nullable()->default(null);
            $table->integer('order');


            $table->foreign('branch_id')
                ->references('id')->on('branches')
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
       Schema::dropIfExists('branch_images');
     }
}
