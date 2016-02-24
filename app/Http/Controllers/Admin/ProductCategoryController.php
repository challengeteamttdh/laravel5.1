<?php

namespace App\Http\Controllers\Admin;

use App\ProductCategory;
use App\Language;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\ProductCategoryRequest;
use App\Http\Requests\Admin\DeleteRequest;
use App\Http\Requests\Admin\ReorderRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
//use Datatables;

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
        $product_category = ProductCategory::all();
        return view('admin.productcategory.index', ['product_category' => $product_category]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create() {
        if(Request::ismethod('post')){
            $params = Input::all();
            if(empty($params["name"])){
                $error = 'Please enter name of category';
                
            }else{
                $product_cate = new ProductCategory();
                $product_cate->name = $params["name"];
                $product_cate->save();
                return view('admin.productcategory.create');
            }
            
        }
        return view('admin.productcategory.create');
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
    public function edit($id) {
        $product_cate = ProductCategory::findOrFail($id);
        return view('admin.productcategory.create_edit', array('product_cate'=>$product_cate));
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
