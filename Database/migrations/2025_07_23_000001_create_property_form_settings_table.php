<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyFormSettingsTable extends Migration
{
    public function up(): void
    {
        Schema::create('property_form_settings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('section');
            $table->string('field');
            $table->boolean('is_enabled')->default(true);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unique(['user_id', 'section', 'field']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('property_form_settings');
    }
}
