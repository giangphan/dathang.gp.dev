@extends('templates.admin')

@section('title')
Thêm đơn hàng
@stop

@section('page_heading')
<div id="page_heading">
	<div class="heading-title">
		<h2>Tạo đơn hàng</h2>
		<a class="heading-back" href='javascript:history.go(-1)'>
			<i class="glyphicon glyphicon-chevron-left"></i> Trở lại trang trước
		</a>
	</div>
</div>
@stop

@section('page_content')
<?php
$h = "7";
$hm = $h * 60;
$ms = $hm * 60;
$today = gmdate("d/m/Y", time() + $ms); 
?>
<form action="" method="post" id="add-order">
	{{ csrf_field() }}
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="md-card">
				<div class="md-card-toolbar">
					<h3 class="md-card-title">Thông tin</h3>
				</div>
				<div class="md-card-content">
					<div class="form-row">
						<div class="input-wrapper">
							<label for="tenkhachhang">Mã biên nhận</label>
							<input type="text" class="form-control" name="maBienNhan" value="{!! old('maBienNhan') !!}" id="maBienNhan"/>
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="form-row">
						<div class="row">
							<div class="col-md-6">
								<div class="input-wrapper">
									<label for="tenKhachHang">Tên khách hàng</label>
									<input type="text" class="form-control" name="tenKhachHang" value="{!! old('tenKhachHang') !!}" id="tenKhachHang"/>
									<span class="input-bar"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label for="soDienThoai">Số điện thoại</label>
									<input type="text" class="form-control" name="soDienThoai" value="{!! old('soDienThoai') !!}" id="soDienThoai"/>
									<span class="input-bar"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="input-wrapper">
							<label for="diaChiGiaoHang">Địa chỉ giao hàng</label>
							<input type="text" class="form-control" name="diaChiGiaoHang" value="{!! old('diaChiGiaoHang') !!}" id="diaChiGiaoHang"/>
							<span class="input-bar"></span>
						</div>
					</div>
					<div class="form-row">
						<div class="row">
							<div class="col-md-6">
								<div class="input-wrapper">
									<label for="ngayDatHang">Ngày đặt hàng</label>
									<input type="text" class="form-control" name="ngayDatHang" value="{!! old('ngayDatHang') !!}" id="ngayDatHang" data-uk-datepicker="{format:'DD/MM/YYYY'}"/>
									<span class="input-bar"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label for="ngayGiaoHang">Ngày giao hàng</label>
									<input type="text" class="form-control" name="ngayGiaoHang" value="{!! old('ngayGiaoHang') !!}" id="ngayGiaoHang" data-uk-datepicker="{format:'DD/MM/YYYY'}"/>
									<span class="input-bar"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="row">
							<div class="col-md-6">
								<div class="input-wrapper">
									<label for="tongTien">Tổng tiền</label>
									<input type="text" class="form-control" name="tongTien" value="{!! old('tongTien') !!}" id="tongTien"/>
									<span class="input-bar"></span>
								</div>
							</div>
							<div class="col-md-6">
								<div class="input-wrapper">
									<label for="thanhToan">Thanh toán</label>
									<input type="text" class="form-control" name="thanhToan" value="{!! old('thanhToan') !!}" id="thanhToan"/>
									<span class="input-bar"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="input-wrapper">
							<label for="ghiChu">Ghi chú đơn hàng</label>
							<textarea class="form-control" name="ghiChu" value="{!! old('ghiChu') !!}" id="ghiChu" form="add-order"/></textarea
							<span class="input-bar"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="sanpham-field">
			<div class="md-card">
				<div class="md-card-toolbar">
					<a class="add_field_button"><i class="fa fa-plus"></i></a>
					<h3 class="md-card-title">Sản phẩm 1</h3>
				</div>
				<div class="md-card-content">
					<div class="form-row">
						<div class="row">
							<div class="col-md-8">
								<div class="input-wrapper">
									<label for="sanPham1">Sản phẩm</label>
									<input type="text" class="form-control" name="sanPham[]" value="{!! old('sanPham[]') !!}" id="sanPham1"/>
									<span class="input-bar"></span>
								</div>
							</div>
							<div class="col-md-4">
								<div class="input-wrapper">
									<label for="soLuong1">Số lượng</label>
									<input type="text" class="form-control" name="soLuong[]" value="{!! old('soLuong[]') !!}" id="soLuong1"/>
									<span class="input-bar"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="input-wrapper">
							<label for="ghiChuSP1">Ghi chú sản phẩm</label>
							<textarea class="form-control" name="ghiChuSP[]" value="{!! old('ghiChuSP[]') !!}" id="ghiChuSP1" form="add-order"/></textarea>
							<span class="input-bar"></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<button class="btn-edit-save" type="submit" data-toggle="tooltip" data-placement="top" title="Tạo"><i class="glyphicon glyphicon-save"></i></button>
</form>
@stop

@section('script')
<script>
	$(document).ready(function() { 
  var max_fields      = 5; //maximum input boxes allowed
    var wrapper         = $("#sanpham-field"); //Fields wrapper
    var add_button      = $(".add_field_button"); //Add button ID
    
    var x = 1; //initlal text box count
    $(add_button).click(function(e){ //on add input button click
    	e.preventDefault();
        if(x < max_fields){ //max input box allowed
            x++; //text box increment
            $(wrapper).append('<div class="md-card"><div class="md-card-toolbar"><h3 class="md-card-title">Sản phẩm '+x+'</h3></div><div class="md-card-content"><div class="form-row"><div class="row"><div class="col-md-8"><div class="input-wrapper"><label for="sanPham'+x+'">Sản phẩm</label><input type="text" class="form-control" name="sanPham[]" value="{!! old('sanPham[]') !!}" id="sanPham'+x+'"/><span class="input-bar"></span></div></div><div class="col-md-4"><div class="input-wrapper"><label for="soLuong'+x+'">Số lượng</label><input type="text" class="form-control" name="soLuong[]" value="{!! old('soLuong[]') !!}" id="soLuong'+x+'"/><span class="input-bar"></span></div></div></div></div><div class="form-row"><div class="input-wrapper"><label for="ghiChuSP'+x+'">Ghi chú sản phẩm</label><textarea class="form-control" name="ghiChuSP[]" value="{!! old('ghiChuSP[]') !!}" id="ghiChuSP'+x+'" form="add-order"/></textarea><span class="input-bar"></span></div></div></div></div></div>'); //add input box
        }
    });
});
</script>
@stop