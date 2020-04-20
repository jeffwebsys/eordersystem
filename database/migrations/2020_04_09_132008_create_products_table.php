<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->timestamps();
            $table->unsignedInteger('user_id');
            // $table->unsignedInteger('category_id');
            $table->unsignedInteger('subcategory_id');
            $table->unsignedInteger('price');
            $table->unsignedInteger('status');
            $table->unsignedBigInteger('quantity')->default(1);
            $table->string('name');
            $table->string('description');

            $table->foreign('subcategory_id')
            ->references('id')
            ->on('subcategories')
            ->onDelete('cascade');
        });

        //     Schema::create('product_subcategory', function (Blueprint $table) {
        //     $table->integer('subcategory_id');
        //     $table->integer('product_id');
        //     $table->primary('subcategory_id','product_id');
          
            
        // });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('subcategory_product');
    }
}
