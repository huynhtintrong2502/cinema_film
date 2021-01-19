<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLichsuworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichsuwork', function (Blueprint $table) {
            $table->increments('ID',true);//integer('ID')->primary();
            $table->integer('MaNV');
            $table->date('NgayLam');
            $table->dateTime('ThoiGianBatDau');
            $table->dateTime('ThoiGianKetThuc');
            $table->integer('GioLam');
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
        Schema::dropIfExists('lichsuwork');
    }
}
