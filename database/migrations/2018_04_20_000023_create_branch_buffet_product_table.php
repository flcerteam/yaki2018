<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchBuffetProductTable extends Migration
{
    /**
     * Run the migrations.
     * @table category_product
     *
     * @return void
     */ 
    public function up()
    {
        Schema::create('branch_buffet_product', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('branch_id')->unsigned();
            $table->integer('buffet_product_id')->unsigned();


            $table->foreign('branch_id')
                ->references('id')->on('branches')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('buffet_product_id')
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
       Schema::dropIfExists('branch_buffet_product');
     }
}