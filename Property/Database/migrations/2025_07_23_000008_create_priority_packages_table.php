<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriorityPackagesTable extends Migration
{
    public function up(): void
    {
        Schema::create('priority_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Tên gói');
            $table->double('price')->comment('Giá gói');
            $table->integer('duration_days')->comment('Thời gian hiệu lực (ngày)');
            $table->boolean('is_old')->default(false)->comment('Đã hết hạn hay chưa');
            $table->integer('priority_level')->comment('Mức độ ưu tiên');
            $table->time('start_time')->comment('Giờ bắt đầu kích hoạt');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('priority_packages');
    }
}
