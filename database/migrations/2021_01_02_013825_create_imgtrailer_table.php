<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImgtrailerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imgtrailer', function (Blueprint $table) {
            $table->increments('Id',true);//integer('MaLuong')->primary();
            $table->integer('MaPhim');
            $table->string('Anh1');
            $table->string('Anh2');
            $table->string('Anh3');
            $table->string('Anh4');
            $table->string('Anh5');
            $table->string('Anh6');
            $table->string('Anh7');
            $table->string('Anh8');
            $table->string('Anh9');
            $table->string('Anh10');
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
        Schema::dropIfExists('imgtrailer');
    }
}
