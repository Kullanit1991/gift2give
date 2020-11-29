<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopSaleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('top_sales', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->longText('description');
            $table->decimal('sale_price', 8, 2);
            $table->decimal('price', 8, 2);
            $table->text('product_photo_path')->nullable();
            $table->tinyInteger('top_sale_type_id');
            $table->char('status', 1)->nullable();
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
        Schema::dropIfExists('top_sales');
    }
}
