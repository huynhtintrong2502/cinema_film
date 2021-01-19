<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiVeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_ve', function (Blueprint $table) {
            $table->increments('Id',true);
            $table->integer('MaSC');
            $table->integer('MaGhe');
            $table->integer('MaPHim');
            $table->date('NgayXem');
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
        Schema::dropIfExists('api_ve');
    }
}
