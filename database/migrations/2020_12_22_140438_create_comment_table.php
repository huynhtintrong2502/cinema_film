<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('ID',true);//integer('ID')->primary();
            $table->integer('MaPhim');
            $table->foreign('MaPhim')->references('MaPhim')->on('phim');
            $table->integer('MaKH');
            $table->foreign('MaKH')->references('MaKH')->on('khachhang');
            $table->dateTime('ThoiGianCMT');
            $table->double('DanhGia');
            $table->string('NoiDung'); 
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
        Schema::dropIfExists('comment');
    }
}
