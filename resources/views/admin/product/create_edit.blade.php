@extends('admin.layouts.modal')
{{-- Content --}}
@section('content')
        <!-- Tabs -->
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab-general" data-toggle="tab"> {{
			trans("admin/modal.general") }}</a></li>
</ul>
<!-- ./ tabs -->
@if (isset($product))
{!! Form::model($product, array('url' => URL::to('admin/product') . '/' . $product->id, 'method' => 'put','id'=>'fupload', 'class' => 'bf', 'files'=> true)) !!}
@else
{!! Form::open(array('url' => URL::to('admin/product'), 'method' => 'post', 'class' => 'bf','id'=>'fupload', 'files'=> true)) !!}
@endif
        <!-- Tabs Content -->
<div class="tab-content">
    <!-- General tab -->
    <div class="tab-pane active" id="tab-general">
        <div class="form-group  {{ $errors->has('sub_category_id') ? 'has-error' : '' }}">
            {!! Form::label('sub_category_id', trans("admin/admin.language"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::select('sub_category_id', $productsubcategory, @isset($product)? $product->sub_category_id : 'default', array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('sub_category_id', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('color_id') ? 'has-error' : '' }}">
            {!! Form::label('color_id', trans("admin/admin.language"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::select('color_id', $color, @isset($product)? $product->color_id : 'default', array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('color_id', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('material_id') ? 'has-error' : '' }}">
            {!! Form::label('material_id', trans("admin/admin.language"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::select('material_id', $material, @isset($product)? $product->material_id : 'default', array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('material_id', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('producer_id') ? 'has-error' : '' }}">
            {!! Form::label('producer_id', trans("admin/admin.language"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::select('producer_id', $producer, @isset($product)? $product->producer_id : 'default', array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('sub_category_id', ':message') }}</span>
            </div>
        </div>

        <div class="form-group  {{ $errors->has('title') ? 'has-error' : '' }}">
            {!! Form::label('title', trans("admin/modal.title"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('title', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('title', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('product_code') ? 'has-error' : '' }}">
            {!! Form::label('product_code', trans("admin/article.source"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::text('product_code', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('product_code', ':message') }}</span>
            </div>
        </div>
        <div class="form-group  {{ $errors->has('content') ? 'has-error' : '' }}">
            {!! Form::label('content', trans("admin/article.content"), array('class' => 'control-label')) !!}
            <div class="controls">
                {!! Form::textarea('content', null, array('class' => 'form-control')) !!}
                <span class="help-block">{{ $errors->first('content', ':message') }}</span>
            </div>
        </div>
        <div
                class="form-group {!! $errors->has('picture') ? 'error' : '' !!} ">
            <div class="col-lg-12">
                {!! Form::label('source', trans("admin/article.picture"), array('class' => 'control-label')) !!}
                <input name="picture"
                       type="file" class="uploader" id="image" value="Upload"/>
            </div>

        </div>
        <!-- ./ general tab -->
    </div>
    <!-- ./ tabs content -->
</div>

<!-- Form Actions -->

<div class="form-group">
    <div class="col-md-12">
        <button type="reset" class="btn btn-sm btn-warning close_popup">
            <span class="glyphicon glyphicon-ban-circle"></span> {{
						trans("admin/modal.cancel") }}
        </button>
        <button type="reset" class="btn btn-sm btn-default">
            <span class="glyphicon glyphicon-remove-circle"></span> {{
						trans("admin/modal.reset") }}
        </button>
        <button type="submit" class="btn btn-sm btn-success">
            <span class="glyphicon glyphicon-ok-circle"></span>
            @if	(isset($product))
                {{ trans("admin/modal.edit") }}
            @else
                {{trans("admin/modal.create") }}
            @endif
        </button>
    </div>
</div>
<!-- ./ form actions -->

</form>
@stop
