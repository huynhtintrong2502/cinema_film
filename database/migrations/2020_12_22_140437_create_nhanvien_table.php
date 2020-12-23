<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhanvien', function (Blueprint $table) {
            $table->string('MaNV')->primary();
            $table->integer('ID');
            $table->foreign('ID')->references('ID')->on('nguoidung');
            $table->string('TenNV');
            $table->string('CMND');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->date('NgayBD');
            $table->string('Anh');
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
        Schema::dropIfExists('nhanvien');
    }
}
