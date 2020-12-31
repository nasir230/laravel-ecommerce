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
            $table->string('old')->nullable();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->string('des')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('excerpt')->nullable();
            $table->string('gallery')->nullable();
            $table->string('parent')->nullable();
            $table->string('price')->nullable();
            $table->string('attributes')->nullable();
            $table->bigInteger('category_id')->index();
            $table->bigInteger('user_id')->index();
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
        Schema::dropIfExists('products');
    }
}
