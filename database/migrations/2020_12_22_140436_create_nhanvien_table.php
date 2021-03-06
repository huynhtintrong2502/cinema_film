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
            $table->increments('MaNV',true);//string('MaNV')->primary();
            $table->integer('ID');
            $table->string('TenNV');
            $table->string('CMND');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->date('NgaySinh');
            $table->date('NgayBD');
            $table->string('Anh');
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
        Schema::dropIfExists('nhanvien');
    }
}
