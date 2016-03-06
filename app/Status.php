<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table = "statuses";
	
	protected $fillable = ['id','loaiTinhTrang'];

	public $timestamps = false;

	public function order(){
		return $this->hasMany(Order::class);
	}
}
