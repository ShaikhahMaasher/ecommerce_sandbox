<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->text('description')->nullable();
            $table->text('short_description')->nullable();
            $table->string('status')->default('draft');
            $table->string('type')->default('simple');
            $table->string('visibility')->default('public');
            $table->unsignedDecimal('regular_price')->nullable();
            $table->unsignedDecimal('sale_price')->nullable();
            $table->string('sku')->nullable();
            $table->boolean('in_stock')->nullable();
            $table->integer('stock_number')->nullable(); 
            $table->double('weight')->nullable();                        
            $table->timestamps();
            $table->softDeletes();
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
