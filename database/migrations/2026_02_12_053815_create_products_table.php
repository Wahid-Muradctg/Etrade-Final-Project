<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('shortdescription');
            $table->text('description');           
            $table->string('catagory');
            $table->string('slug')->unique();
            $table->string('brandname');
            $table->string('model')->unique();
            $table->string('sku')->unique();
            $table->integer('stock');
            $table->integer('minstock');
            $table->boolean('stockstatus')->default(true);
            $table->integer('regularprice');
            $table->integer('saleprice')->nullable();
            $table->string('discount')->nullable();
            $table->string('image')->nullable();
            $table->string('publishedstatus');
            $table->date('publisheddate');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
