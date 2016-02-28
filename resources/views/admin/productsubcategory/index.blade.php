@extends('admin.layouts.default')

{{-- Web site Title --}}
@section('title') {!! trans("admin/product.subcategory") !!}
:: @parent @stop

{{-- Content --}}
@section('main')
    <div class="page-header">
        <h3>
            {!! trans("admin/product.subcategory") !!}
            <div class="pull-right">
                <div class="pull-right">
                    <a href="{!! URL::to('admin/productsubcategory/create') !!}"
                       class="btn btn-sm  btn-primary iframe"><span
                                class="glyphicon glyphicon-plus-sign"></span> {{ trans("admin/modal.new") }}</a>
                </div>
            </div>
        </h3>
    </div>

    <table id="table" class="table table-striped table-hover">
        <thead>
        <tr>
            <th>{!! trans("admin/product.subcategory") !!}</th>
            <th>{!! trans("admin/product.category") !!}</th>
            <th>{!! trans("admin/admin.created_at") !!}</th>
            <th>{!! trans("admin/admin.action") !!}</th>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
@stop

{{-- Scripts --}}
@section('scripts')
@stop
