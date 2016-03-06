<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Order;
use App\Detail;
use App\Customer;

class OrderController extends Controller
{
	// public function __construct(){
	// 	$this->middleware('auth');
	// }

    public function getAdd(){
    	return view('admin.order.add');
    }

    public function postAdd(OrderRequest $request){
    	$cus = new Customer;
    	$cus->tenKhachHang = $request->tenKhachHang;
    	if($request->soDienThoai != ""){
    		$cus->soDienThoai = $request->soDienThoai;
    	}
    	$cus->save();

    	$order = new Order;
        $order->maDonHang = $request->maDonHang;
        $order->khachHang = $cus->id;
        $order->diaChi = $request->diaChi;
        $order->ngayDat = $request->ngayDat;
        $order->ngayGiao = $request->ngayGiao;
        $order->tongTien = $request->tongTien;
        $order->thanhToan = $request->thanhToan;
        $order->ghiChuDonHang -> $request->ghiChuDonHang;
        $order->save();

        $sanPham = $request->sanPham;
        $soLuong = $request->soLuong;
        $ghiChuSP = $request->ghiChuSP;
        foreach($sanPham as $sp => $value){
            $product = new Detail;
            $product->donHang = $order->id;
            $product->sanPham = $value;
            $product->soLuong = $soLuong[$sp];
            $product->tinhTrangSanPham = 'Sản phẩm mới';
            $product->ghiChuSanPham = $ghiChuSP[$sp];
            $product->save();
        }
        
        return redirect()->route('admin.order.list')->with(['flash_level'=>'success','flash_message'=>'Thêm đơn hàng mới thành công']);

    }
}
