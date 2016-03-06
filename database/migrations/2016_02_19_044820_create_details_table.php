<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('donHang')->unsigned();
            $table->foreign('donHang')->references('id')->on('orders')->onDelete('cascade');
            $table->string('sanPham');
            $table->smallInteger('soLuong')->unsigned();
            $table->string('tinhTrangSanPham');
            $table->string('ghiChuSanPham');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('details');
    }
}
