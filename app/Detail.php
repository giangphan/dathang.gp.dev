<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = 'details';
	
	protected $fillable = ['id','donHang','sanPham','tinhTrangSanPham','ghiChuSanPham'];

	public $timestamps = true;

	public function order(){
		return $this->belongsTo(Order::class);
	}
}
