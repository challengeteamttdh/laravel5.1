@extends('admin.layouts.modal')
@section('content')
{!! Form::model($id, array('url' => URL::to('admin/productcategory/delete') . '/' . $id, 'method' => 'delete', 'files'=> true,'id'=>'delete')) !!}
    <div class="form-group">
        <div class="controls">
            Did you want to delete this item?<br>
            <a href="{!! URL::to('admin/productcategory') !!}" class="btn btn-sm btn-warning close_popup">
                <span class="glyphicon glyphicon-ban-circle"></span> Cancel
            </a>
            <button type="submit" class="btn btn-sm btn-danger">
                <span class="glyphicon glyphicon-trash"></span> Delete
            </button>
        </div>
    </div>
{!! Form::close() !!}
@stop
