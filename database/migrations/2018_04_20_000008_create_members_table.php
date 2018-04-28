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


            $table->tinyInteger('status')->unsigned();
            $table->mediumText('shipping_address')->nullable()->default(null);
            $table->mediumText('billing_address')->nullable()->default(null);
            $table->mediumText('comment')->nullable()->default(null);
            $table->string('invoice_no', 50)->nullable()->default(null);
            $table->dateTime('invoice_date')->nullable()->default(null);
            $table->dateTime('delivery_date')->nullable()->default(null);
            $table->decimal('total_discount', 18, 0)->nullable()->default(null);
            $table->decimal('total_shipping', 18, 0)->nullable()->default(null);
            $table->decimal('total', 18, 0)->nullable()->default(null);
            $table->nullableTimestamps();

            $table->foreign('member_id')
                ->references('id')->on('members')
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
       Schema::dropIfExists('orders');
     }
}