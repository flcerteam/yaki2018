<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderProductTable extends Migration
{
    /**
     * Run the migrations.
     * @table order_details
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('order_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->string('name', 255)->nullable()->default(null);
            $table->string('sku', 100);
            $table->decimal('price', 18, 0)->nullable()->default(null);
            $table->decimal('quantity', 5, 1)->nullable()->default(null);

            $table->foreign('order_id')
                ->references('id')->on('orders')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('product_id')
                ->references('id')->on('products')
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
       Schema::dropIfExists('order_details');
     }
}
