<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('code')->unique();
            $table->string('name');
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->decimal('cost', $precision = 8, $scale = 2);
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->integer('unit_id');
            $table->integer('stock_alert');
            $table->string('tax_type');
            $table->decimal('order_tax', $precision = 8, $scale = 2);
            $table->integer('warehouse_id');
            $table->integer('supplier_id');
            $table->integer('quantity');
            $table->string('status');
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
};
