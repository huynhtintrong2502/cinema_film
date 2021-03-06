<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSuatchieuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suatchieu', function (Blueprint $table) {
            $table->integer('MaSC')->primary();
            $table->time('TGBatDau')->format('hh:mm');
            $table->time('TGKetThuc')->format('hh:mm');
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
        Schema::dropIfExists('suatchieu');
    }
}
