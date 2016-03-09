<?php

namespace App\Http\Controllers\Admin;

use App\Color;
use App\Material;
use App\Producer;
use App\Product;
use App\Language;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\ProductRequest;
use App\Http\Requests\Admin\DeleteRequest;
use App\Http\Requests\Admin\ReorderRequest;
use App\ProductSubCategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Datatables;

class ProductController extends AdminController {
    public function __construct()
    {
        view()->share('type', 'product');
    }
    /*
   * Display a listing of the resource.
   *
   * @return Response
   */
    public function index()
    {
        // Show the page
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $productsubcategory = ProductSubCategory::lists('name', 'id')->toArray();
        $color = Color::lists('name', 'id')->toArray();
        $material = Material::lists('name', 'id')->toArray();
        $producer = Producer::lists('name', 'id')->toArray();
        return view('admin.product.create_edit', compact('productsubcategory', 'color', 'material', 'producer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ProductRequest $request)
    {
        $product = new Product($request->except('image'));
        $product -> user_id = Auth::id();

        $picture = "";
        if(Input::hasFile('image'))
        {
            $file = Input::file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file -> getClientOriginalExtension();
            $picture = sha1($filename . time()) . '.' . $extension;
        }
        $product -> picture = $picture;
        $product -> save();

        if(Input::hasFile('image'))
        {
            $destinationPath = public_path() . '/images/product/'.$product->id.'/';
            Input::file('image')->move($destinationPath, $picture);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Product $product)
    {
        $productsubcategory = ProductSubCategory::lists('name', 'id')->toArray();
        $color = Color::lists('name', 'id')->toArray();
        $material = Material::lists('name', 'id')->toArray();
        $producer = Producer::lists('name', 'id')->toArray();
        return view('admin.product.create_edit', compact('product', 'productsubcategory', 'color', 'material', 'producer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(ProductRequest $request, Product $product)
    {
        $product -> user_id = Auth::id();
        $picture = "";
        if(Input::hasFile('image'))
        {
            $file = Input::file('image');
            $filename = $file->getClientOriginalName();
            $extension = $file -> getClientOriginalExtension();
            $picture = sha1($filename . time()) . '.' . $extension;
        }
        $product -> picture = $picture;
        $product -> update($request->except('image'));

        if(Input::hasFile('image'))
        {
            $destinationPath = public_path() . '/images/product/'.$product->id.'/';
            Input::file('image')->move($destinationPath, $picture);
        }
    }
    public function showAtHomepage($id){
        dd($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */

    public function delete(Product $product)
    {
        return view('admin.product.delete', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy(Product $product)
    {
        $product->forceDelete();
    }


    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data()
    {
        $product = Product::join('product_sub_category', 'product_sub_category.id', '=', 'products.sub_category_id')
            ->select(array('products.id','products.title','product_sub_category.name as category',
                'products.created_at','products.showathome'));
        
        return Datatables::of($product)
                
        ->add_column('show_at_home', 
            '<input class="show-at-home" onclick="changeType({{$id}})" type="checkbox" {{$showathome == 1? checked : \'/\'/}} checked="false" checkname="showathome">')
        ->add_column('actions', '<a href="{{{ URL::to(\'admin/product/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("admin/modal.edit") }}</a>
                <a href="{{{ URL::to(\'admin/product/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("admin/modal.delete") }}</a>
                <input type="hidden" name="row" value="{{$id}}" id="row">')
        ->remove_column('id')
        ->remove_column('created_at')

        ->make();
    }
}
