<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyFurnituresTable extends Migration
{
    public function up(): void
    {
        Schema::create('property_furnitures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('furniture_type_id')->nullable();
            $table->unsignedBigInteger('custom_furniture_id')->nullable();
            $table->integer('quantity')->default(1);
            $table->timestamps();

            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreign('furniture_type_id')->references('id')->on('furniture_types')->onDelete('set null');
            $table->foreign('custom_furniture_id')->references('id')->on('custom_furnitures')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_furnitures');
    }
}
