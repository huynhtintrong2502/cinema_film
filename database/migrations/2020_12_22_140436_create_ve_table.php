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
            $table->increments('MaVe',true);//integer('MaVe')->primary();
            $table->string('MaNV');
            $table->integer('MaSC');
            $table->integer('MaGhe');
            $table->integer('MaKH');
            $table->integer('MaPhim');
            $table->date('NgayMua');
            $table->double('GiaVe');
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
        Schema::dropIfExists('ve');
    }
}
