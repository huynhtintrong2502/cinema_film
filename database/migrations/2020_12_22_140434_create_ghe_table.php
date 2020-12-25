<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGheTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghe', function (Blueprint $table) {
            $table->integer('MaGhe')->primary();
            $table->integer('MaLoaiGhe');
            $table->foreign('MaLoaiGhe')->references('MaLoaiGhe')->on('loaighe');
            $table->integer('MaRap');
            $table->foreign('MaRap')->references('MaRap')->on('rap');
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
        Schema::dropIfExists('ghe');
    }
}
