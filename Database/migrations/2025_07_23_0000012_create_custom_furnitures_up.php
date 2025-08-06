<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('custom_furnitures', function (Blueprint $table) {
            $table->foreignId('property_id')->after('id')->constrained()->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('custom_furnitures', function (Blueprint $table) {
            $table->dropForeign(['property_id']);
            $table->dropColumn('property_id');
        });
    }
};