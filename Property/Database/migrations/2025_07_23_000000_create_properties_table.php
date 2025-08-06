<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    public function up(): void
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('Tiêu đề sản phẩm');
            $table->text('description')->nullable()->comment('Mô tả chi tiết');
            $table->text('short_description')->nullable()->comment('Mô tả ngắn');
            $table->enum('status', ['draft', 'published', 'hidden'])->default('draft')->comment('Trạng thái sản phẩm');
            $table->string('slug')->unique()->comment('Đường dẫn SEO');
            $table->timestamp('deleted_at')->nullable()->comment('Thời điểm xóa mềm');
            $table->double('area')->nullable()->comment('Diện tích (m2)');
            $table->double('price_per_m2')->nullable()->comment('Đơn giá / m2');
            $table->double('total_price')->nullable()->comment('Tổng giá trị');
            $table->text('address')->nullable()->comment('Địa chỉ cụ thể');
            $table->string('type')->nullable()->comment('Loại nhà đất (chung cư, nhà phố...)');
            $table->string('legal_status')->nullable()->comment('Tình trạng pháp lý');
            $table->integer('bedrooms')->nullable()->comment('Số phòng ngủ');
            $table->integer('bathrooms')->nullable()->comment('Số phòng tắm');
            $table->integer('floors')->nullable()->comment('Số tầng');
            $table->string('direction')->nullable()->comment('Hướng nhà');
            $table->integer('build_year')->nullable()->comment('Năm xây dựng');
            $table->boolean('is_active')->default(true)->comment('Kích hoạt hiển thị');
            $table->unsignedBigInteger('created_by')->nullable()->comment('Người đăng');
            $table->double('latitude')->nullable()->comment('Vĩ độ');
            $table->double('longitude')->nullable()->comment('Kinh độ');
            $table->integer('views_count')->default(0)->comment('Lượt xem');
            $table->string('transaction_type')->nullable()->comment('Loại giao dịch (bán, thuê)');
            $table->unsignedBigInteger('legal_document_id')->nullable()->comment('Giấy tờ pháp lý liên kết');
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('ward_id')->nullable();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->string('street_name')->nullable()->comment('Tên đường');
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users')->onDelete('set null');
            $table->foreign('legal_document_id')->references('id')->on('legal_documents')->onDelete('set null');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('set null');
            $table->foreign('ward_id')->references('id')->on('wards')->onDelete('set null');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
}
