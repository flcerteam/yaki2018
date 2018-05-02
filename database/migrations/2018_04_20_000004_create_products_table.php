<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     * @table products
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('sku', 100);
            $table->string('name', 255)->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->integer('unit_id')->unsigned();
            $table->decimal('number_of_unit', 4, 1)->nullable()->default(null);
            $table->decimal('price', 18, 0)->nullable()->default(null);
            $table->tinyInteger('status')->default('0');
            
            $table->nullableTimestamps();

            $table->unique(["sku"], 'unique_skus');

            $table->foreign('unit_id')
                ->references('id')->on('units')
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
       Schema::dropIfExists('products');
     }
}