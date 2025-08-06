<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyPrioritiesTable extends Migration
{
    public function up(): void
    {
        Schema::create('property_priorities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('property_id');
            $table->unsignedBigInteger('priority_package_id');
            $table->date('start_date');
            $table->date('end_date');
            $table->timestamps();

            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
            $table->foreign('priority_package_id')->references('id')->on('priority_packages')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_priorities');
    }
}
