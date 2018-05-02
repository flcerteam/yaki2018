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
            $table->string('member_no', 50)->nullable()->default(null);
            $table->string('name', 150)->nullable()->default(null);
            $table->date('birth_date')->nullable()->default(null);
            $table->string('phone_number', 50)->nullable()->default(null);
            $table->string('email', 50)->nullable()->default(null);
            $table->string('gender', 10)->nullable()->default(null);
            $table->longText('address')->nullable()->default(null);
            $table->decimal('member_point', 10, 0)->nullable()->default(null);

            $table->nullableTimestamps();
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