<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phim', function (Blueprint $table) {
            $table->integer('MaPhim')->primary();
            $table->integer('MaNCC');
            $table->foreign('MaNCC')->references('MaNCC')->on('nhacungcap');
            $table->string('TenPhim');
            $table->string('DaoDien');
            $table->string('QuocGia');
            $table->integer('NamSX');
            $table->integer('ThoiLuong');
            $table->string('NgonNgu');
            $table->string('NoiDung');
            $table->integer('MaTL');
            $table->foreign('MaTL')->references('MaTL')->on('theloai');
            $table->decimal('DanhGia');
            $table->integer('AgeDuocXem');
            $table->date('NgayMua');
            $table->string('AnhHienThi');
            $table->string('trailer');
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
        Schema::dropIfExists('phim');
    }
}
