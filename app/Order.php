<?php

namespace App;

use App\Detail;
use App\Customer;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
	
	protected $fillable = ['id','maDonHang','maKhachHang','diaChi','ngayDat','ngayGiao','tongTien','thanhToan','ghiChuDonHang','tinhTrangDonHang'];

	public $timestamps = true;

	public function detail(){
    	return $this->hasMany(Detail::class);
    }

    public function customer(){
    	return $this->belongsTo(Customer::class);
    }

    public function connCustomer(){
    	$datas = DB::table('orders')
            ->join('customers', 'orders.maKhachHang', '=', 'customers.id')
            ->select('orders.*', 'customers.*')
            ->get();

        $data = order::hydrate($datas);
            return $data;
    }

    public function connDetail(){
    	$datas = DB::table('orders')
            ->join('details', 'orders.id', '=', 'details.donHang')
            ->select('orders.*', 'details.*')
            ->get();

        $data = order::hydrate($datas);
            return $data;
    }


}
