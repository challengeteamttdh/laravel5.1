@extends('admin.layouts.modal')
@section('content')
	{!! Form::model($producer, array('url' => URL::to('admin/producer') . '/' . $producer->id, 'method' => 'delete', 'class' => 'bf', 'files'=> true)) !!}
	<div class="form-group">
		<div class="controls" align="center">
			{{ trans("admin/modal.delete_message") }}<br>
			<element class="btn btn-warning btn-sm close_popup">
				<span class="glyphicon glyphicon-ban-circle"></span> {{
			trans("admin/modal.cancel") }}</element>
			<button type="submit" class="btn btn-sm btn-danger">
				<span class="glyphicon glyphicon-trash"></span> {{
				trans("admin/modal.delete") }}
			</button>
		</div>
	</div>
	{!! Form::close() !!}
@stop
