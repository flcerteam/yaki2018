<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     * @table orders
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('member_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->mediumText('shipping_address')->nullable()->default(null);
            $table->mediumText('billing_address')->nullable()->default(null);
            $table->mediumText('comment')->nullable()->default(null);
            $table->string('invoice_no', 50)->nullable()->default(null);
            $table->dateTime('invoice_date')->nullable()->default(null);
            $table->dateTime('delivery_date')->nullable()->default(null);
            $table->decimal('total_discount', 18, 0)->nullable()->default(null);
            $table->decimal('total_shipping', 18, 0)->nullable()->default(null);
            $table->decimal('total', 18, 0)->nullable()->default(null);
            $table->tinyInteger('payment_type')->unsigned()->default(0);
            $table->nullableTimestamps();

            $table->foreign('member_id')
                ->references('id')->on('members')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('status_id')
                ->references('id')->on('order_statuses')
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