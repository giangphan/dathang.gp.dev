<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('maDonHang',20);
            $table->integer('maKhachHang')->unsigned();
            $table->string('diaChi');
            $table->date('ngayDat');
            $table->date('ngayGiao');
            $table->integer('tongTien')->unsigned();
            $table->integer('thanhToan')->unsigned();
            $table->text('ghiChuDonHang');
            $table->Integer('tinhTrangDonHang')->unsigned();
            $table->timestamps();
        });

        Schema::table('orders', function ($table){
            $table->foreign('maKhachHang')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('tinhTrangDonHang')->references('id')->on('statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('orders');
    }
}
