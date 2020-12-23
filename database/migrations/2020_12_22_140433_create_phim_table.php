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
            $table->string('ThongTinPhim');
            $table->string('NoiDung');
            $table->decimal('DanhGia');
            $table->integer('AgeDuocXem');
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
