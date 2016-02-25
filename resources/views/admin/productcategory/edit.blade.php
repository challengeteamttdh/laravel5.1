@extends('admin.layouts.modal')
{{-- Content --}}
@section('content')
<!-- Tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab-general" data-toggle="tab"> General</a></li>
</ul>
<!-- ./ tabs -->
{!! Form::model($product_cate, array('url' => URL::to('admin/productcategory/edit') . '/' . $product_cate->id, 'method' => 'put', 'files'=> true,'id'=>'edit')) !!}
<!-- Tabs Content -->
<div class="tab-content">
    <!-- General tab -->
    <div class="tab-pane active" id="tab-general">
        <div class="form-group  {{ $errors->has('title') ? 'has-error' : '' }}">
            {!! Form::label('name', 'name', array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('name', $product_cate->name, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('title', ':message') }}</span>
            </div>
        </div>
    </div>
    <!-- ./ general tab -->
</div>
<!-- ./ tabs content -->
<!-- Form Actions -->
<div class="form-group">
    <div class="col-md-12">
        <a href="{!! URL::to('admin/productcategory') !!}" class="btn btn-sm btn-warning close_popup">
            <span class="glyphicon glyphicon-ban-circle"></span> Cancel
        </a>
        <button type="reset" class="btn btn-sm btn-default">
            <span class="glyphicon glyphicon-remove-circle"></span>Reset
        </button>
        <button type="submit" class="btn btn-sm btn-success">
            <span class="glyphicon glyphicon-ok-circle"></span> 
            Edit
        </button>
    </div>
</div>
<!-- ./ form actions -->
{!! Form::close() !!}
@stop
