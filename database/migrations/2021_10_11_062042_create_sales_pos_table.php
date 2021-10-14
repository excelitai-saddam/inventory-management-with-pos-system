<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesPosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales_pos', function (Blueprint $table) {
          
            // $table->date('sales_date')->nullable();
            // $table->string('created_by');
            // $table->string('customer_name');
            // $table->string('item_name')->nullable();
            // $table->string('sales_code')->nullable();
            // $table->string('sales_status')->nullable();
            // $table->string('stock');
            // $table->integer('quantity')->nullable();
            // $table->integer('price');
            // $table->integer('discount')->nullable();
            // $table->integer('tex')->nullable();
            // $table->integer('due')->nullable();
            // $table->integer('payment_status')->nullable();
            // $table->integer('paid_payment')->nullable();
            // $table->integer('subtotal')->nullable();
            // $table->integer('total_discount')->nullable();
            // $table->integer('total_amount')->nullable();
            // $table->integer('grand_total')->nullable(); 
            $table->foreignId('user_id');
            $table->foreignId('product_id');
            $table->unsignedInteger('quantity');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales_pos');
    }
}
