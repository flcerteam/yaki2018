<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     * @table branches
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255)->nullable()->default(null);
            $table->string('slug', 255)->nullable()->default(null);
            $table->longText('description')->nullable()->default(null);
            $table->longText('address')->nullable()->default(null);
            $table->string('contact_name', 100)->nullable()->default(null);
            $table->string('phone_number', 50)->nullable()->default(null);
            $table->string('email', 255)->nullable()->default(null);
            $table->string('open_hour', 20)->nullable()->default(null);
            $table->string('close_hour', 20)->nullable()->default(null);
            $table->tinyInteger('has_buffet_service')->default(0);
            $table->decimal('buffet_price', 18, 0)->nullable()->default(null);
            $table->string('location', 1000)->nullable()->default(null);
            $table->tinyInteger('status');

            $table->nullableTimestamps();

            $table->unique(["name"], 'unique_branches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('branches');
     }
}
