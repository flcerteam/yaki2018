<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     * @table members
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100)->nullable()->default(null);
            $table->date('birth_date')->nullable()->default(null);
            $table->tinyInteger('gender')->nullable()->default(null);
            $table->string('phone_number', 20)->nullable()->default(null);
            $table->string('email', 255)->nullable()->default(null);
            $table->longText('address')->nullable()->default(null);
            $table->decimal('member_point', 10, 0)->nullable()->default(0);

            $table->nullableTimestamps();

            $table->unique(["phone_number"], 'unique_phone_numbers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists('members');
     }
}