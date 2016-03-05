<?php

namespace App\Http\Controllers;

use App\Article;
use App\PhotoAlbum;
use DB;
use App\ProductCategory;
use App\ProductSubCategory;
use App\Product;

class HomeController extends Controller {

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index() {
        $articles = Article::with('author')->orderBy('position', 'DESC')->orderBy('created_at', 'DESC')->limit(4)->get();
        $limit = 4;
        $photoAlbums = PhotoAlbum::select(array(
                    'photo_albums.id',
                    'photo_albums.name',
                    'photo_albums.description',
                    'photo_albums.folder_id',
                    DB::raw('(select filename from photos WHERE album_cover=1 AND deleted_at IS NULL and photos.photo_album_id=photo_albums.id LIMIT 1) AS album_image'),
                    DB::raw('(select filename from photos WHERE photos.photo_album_id=photo_albums.id AND deleted_at IS NULL ORDER BY position ASC, id ASC LIMIT 1) AS album_image_first')
                ))->limit(8)->get();
        $product_cate = ProductCategory::all()->toArray();
        $product_sub_cate = ProductSubCategory::all()->toArray();
        $products = Product::all();
        //get data for left menu
        $productAndSubProduct = array();
        foreach ($product_cate as $key => $cate) {
            $productAndSubProduct[$key]['cate']= $cate;
            foreach ($product_sub_cate as $key2 => $subcate) {
                if($subcate['category_id'] == $cate['id']){
                    $productAndSubProduct[$key]['cate']['subcate'][$key2] = $subcate;
                }
            }
        }
        
        
        $homeProductCate = ProductCategory::take($limit)->get();
        //get data product and category for home page


        
        $pro_home = array();
        foreach($homeProductCate as $key=> $productcate){
            $pro_home[$key]['name'] = $productcate->name;
            $pro_home[$key]['product'] =  
                    DB::table('product_sub_category')->where('product_sub_category.category_id',$productcate->id)
                    ->join('products', 'products.sub_category_id', '=', 'product_sub_category.id')->get();
        }
//        dd($pro_home);
        
        
        return view('pages.home', compact('articles', 'photoAlbums','product_cate','productAndSubProduct','pro_home'));
    }

}
