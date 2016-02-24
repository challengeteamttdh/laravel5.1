<?php

namespace App\Http\Controllers\Admin;

use App\ProductCategory;
use App\Language;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\ProductCategoryRequest;
use App\Http\Requests\Admin\DeleteRequest;
use App\Http\Requests\Admin\ReorderRequest;
use Illuminate\Support\Facades\Auth;
use Datatables;

class ProductCategoryController extends AdminController {

    public function __construct() {
        view()->share('type', 'productcategory');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        return view('admin.productcategory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        $languages = Language::lists('name', 'id')->toArray();
        return view('admin.productcategory.create_edit', compact('languages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ProductCategoryRequest $request) {
        $productcategory = new ProductCategory($request->all());
        $productcategory->user_id = Auth::id();
        $productcategory->save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(ProductCategory $productcategory) {
        $languages = Language::lists('name', 'id')->toArray();
        return view('admin.productcategory.create_edit', compact('productcategory', 'languages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(ProductCategoryRequest $request, ProductCategory $productcategory) {
        $productcategory->user_id_edited = Auth::id();
        $productcategory->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function delete(ProductCategory $productcategory) {
        return view('admin.productcategory.delete', compact('productcategory'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy(ProductCategory $productcategory) {
        $productcategory->delete();
    }

    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data() {
        $productcategory = ProductCategory::join('languages', 'languages.id', '=', 'productcategory.language_id')
                ->select(array('productcategory.id', 'productcategory.title', 'languages.name', 'productcategory.created_at'))
                ->orderBy('productcategory.position', 'ASC');

        return Datatables::of($productcategory)
                        ->add_column('actions', '<a href="{{{ URL::to(\'admin/productcategory/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("admin/modal.edit") }}</a>
                <a href="{{{ URL::to(\'admin/productcategory/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("admin/modal.delete") }}</a>
                <input type="hidden" name="row" value="{{$id}}" id="row">')
                        ->remove_column('id')
                        ->make();
    }

    /**
     * Reorder items
     *
     * @param items list
     * @return items from @param
     */
    public function getReorder(ReorderRequest $request) {
        $list = $request->list;
        $items = explode(",", $list);
        $order = 1;
        foreach ($items as $value) {
            if ($value != '') {
                ProductCategory::where('id', '=', $value)->update(array('position' => $order));
                $order++;
            }
        }
        return $list;
    }

}
