<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ve', function (Blueprint $table) {
            $table->integer('MaVe')->primary();
            $table->integer('MaSC');
            $table->foreign('MaSC')->references('MaSC')->on('suatchieu');
            $table->integer('MaGhe');
            $table->foreign('MaGhe')->references('MaGhe')->on('ghe');
            $table->integer('MaKH');
            $table->foreign('MaKH')->references('MaKH')->on('khachhang');
            $table->integer('MaPhim');
            $table->foreign('MaPhim')->references('MaPhim')->on('phim');
            $table->date('NgayMua');
            $table->double('GiaVe');
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
        Schema::dropIfExists('ve');
    }
}
