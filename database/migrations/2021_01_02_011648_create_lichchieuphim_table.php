<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichchieuphimTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichchieuphim', function (Blueprint $table) {
            $table->increments('Id',true);//integer('MaLuong')->primary();
            $table->integer('MaPhim');
            $table->date('NgayChieu');
            $table->integer('MaRap');
            $table->integer('MaSC');
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
        Schema::dropIfExists('lichchieuphim');
    }
}
