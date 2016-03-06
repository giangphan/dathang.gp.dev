@extends('templates.admin')

@section('page_content')
<div class="input-wrapper">
	<a href=" {{ URL::route('order.add') }}">Add</a>
</div>
@stop