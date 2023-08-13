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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->decimal('cost', $precision = 8, $scale = 2);
            $table->decimal('price', $precision = 8, $scale = 2);
            $table->string('tax_type');
            $table->decimal('order_tax', $precision = 8, $scale = 2);
            $table->integer('warehouse_id');
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
        Schema::dropIfExists('inventories');
    }
};
