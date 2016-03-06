<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';
	
	protected $fillable = ['id','userID','hanhDong','noiDung'];

	public $timestamps = true;

	public function user(){
		return $this->belongsTo(User::Class);
	}
}
