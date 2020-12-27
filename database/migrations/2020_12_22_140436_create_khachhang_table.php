<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachhang', function (Blueprint $table) {
            $table->integer('MaKH')->primary();
            $table->integer('MaLoaiKH');
            $table->foreign('MaLoaiKH')->references('MaLoaiKH')->on('loaikhachhang');
            $table->integer('ID');
            $table->foreign('ID')->references('ID')->on('nguoidung');
            $table->string('TenKH');
            $table->string('CMND');
            $table->date('NgaySinh');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->string('Anh');
            $table->integer('Xoa')->default(0);
                
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
        Schema::dropIfExists('khachhang');
    }
}
