<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuffetProductsTable extends Migration
{
    /**
     * Run the migrations.
     * @table buffet_products
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buffet_products', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('sku', 100);
            $table->string('name', 255)->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->tinyInteger('status')->default('0');
            $table->integer('ribbon_id')->unsigned();
            $table->string('ribbon_content', 50)->nullable()->default(null);
            
            $table->nullableTimestamps();

            $table->unique(["sku"], 'unique_buffet_products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('buffet_products');
     }
}