<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Article;
use App\Http\Requests\Admin\ProductSubCategoryRequest;
use App\ProductSubCategory;
use App\ProductCategory;
use App\Language;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\Admin\ArticleRequest;
use Illuminate\Support\Facades\Auth;
use Datatables;

class ProductSubcategoryController extends AdminController
{
    public function __construct()
    {
        view()->share('type', 'productsubcategory');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.productsubcategory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $productcategory = ProductCategory::lists('name', 'id')->toArray();
        return view('admin.productsubcategory.create_edit', compact('productcategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ProductSubCategoryRequest $request)
    {
        $productsubcategory = new ProductSubCategory($request->all());
        $productsubcategory -> user_id = Auth::id();
        $productsubcategory -> save();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(ProductSubCategory $productsubcategory)
    {
        $productcategory = ProductCategory::lists('name', 'id')->toArray();
        return view('admin.productsubcategory.create_edit', compact('productsubcategory', 'productcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(ProductSubCategoryRequest $request, ProductSubCategory $productsubcategory)
    {
        $productsubcategory -> user_id_edited = Auth::id();
        $productsubcategory -> update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */

    public function delete(ProductSubCategory $productsubcategory)
    {
        return view('admin.productsubcategory.delete', compact('productsubcategory'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy(ProductSubCategory $productsubcategory)
    {
        $productsubcategory->delete();
    }

    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data()
    {
        $productsubcategory = ProductSubCategory::join('product_category', 'product_category.id', '=', 'product_sub_category.category_id')
            ->select(array('product_sub_category.id','product_sub_category.name','product_category.name as category',
                'product_sub_category.created_at'));
//        $article_categories = ArticleCategory::join('languages', 'languages.id', '=', 'article_categories.language_id')
//            ->select(array('article_categories.id','article_categories.title', 'languages.name', 'article_categories.created_at'))
//            ->orderBy('article_categories.position', 'ASC');

        return Datatables::of($productsubcategory)
            ->add_column('actions', '<a href="{{{ URL::to(\'admin/productsubcategory/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("admin/modal.edit") }}</a>
                <a href="{{{ URL::to(\'admin/productsubcategory/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("admin/modal.delete") }}</a>
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
                ArticleCategory::where('id', '=', $value) -> update(array('position' => $order));
                $order++;
            }
        }
        return $list;
    }
}
