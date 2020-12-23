<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhimTheLoaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phim_the_loai', function (Blueprint $table) {
            $table->integer('MaTL');
            $table->foreign('MaTL')->references('MaTL')->on('theloai');
            
            $table->integer('MaPhim');
            $table->foreign('MaPhim')->references('MaPhim')->on('phim');
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
        Schema::dropIfExists('phim_the_loai');
    }
}
