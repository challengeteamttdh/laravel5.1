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

<table id="table" class="table table-striped table-hover">
    <thead>
        <tr>
            <th>Tên danh mục</th>
            <th>Created at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody></tbody>
</table>
@stop

{{-- Scripts --}}
@section('scripts')
@stop
