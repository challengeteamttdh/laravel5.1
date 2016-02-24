@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') {!! trans("admin/newscategory.newscategories") !!}
:: @parent @stop

{{-- Content --}}
@section('main')
<div class="page-header">
    <h3>
        Product Category
        <div class="pull-right">
            <div class="pull-right">
                <a href="{!! URL::to('admin/articlecategory/create') !!}"
                   class="btn btn-sm  btn-primary iframe">
                    <span class="glyphicon glyphicon-plus-sign"></span>
                    New
                </a>
            </div>
        </div>
    </h3>
</div>

<table id="" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Tên danh mục</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if($product_category)
            @foreach ($product_category as $rs)
                <tr>
                    <th>{{ $rs->name }}</th>
                    <th>{{ $rs->created_at }}</th>
                    <th>
                        <a href="{!! URL::to('admin/productcategory/edit') !!}/{{ $rs->id}}">Edit</a>
                        <a href="{!! URL::to('admin/productcategory/delete') !!}/{{ $rs->id}}">Delete</a>
                    </th>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
@stop

{{-- Scripts --}}
@section('scripts')
@stop
