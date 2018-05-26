<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     * @table categories
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('cid', 20);
            $table->string('name', 255)->nullable()->default(null);
            $table->integer('ribbon_id')->unsigned();
            $table->string('ribbon_content', 50)->nullable()->default(null);

            $table->unique(["cid"], 'unique_categories');

            $table->foreign('ribbon_id')
                ->references('id')->on('ribbons')
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
       Schema::dropIfExists('categories');
     }
}
