<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuffetProductImagesTable extends Migration
{
    /**
     * Run the migrations.
     * @table buffet_product_images
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buffet_product_images', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('name', 255)->nullable()->default(null);
            $table->integer('order');

            $table->foreign('product_id')
                ->references('id')->on('buffet_products')
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
       Schema::dropIfExists('product_images');
     }
}
