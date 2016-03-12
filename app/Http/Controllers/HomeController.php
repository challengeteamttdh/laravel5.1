<?php

namespace App\Http\Controllers;

use App\Article;
use App\PhotoAlbum;
use DB;
use App\ProductCategory;
use App\ProductSubCategory;
use App\Product;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller {

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function getcategory() {
        $product_cate = ProductCategory::all()->toArray();
        $product_sub_cate = ProductSubCategory::all()->toArray();
        $products = Product::all();
        //get data for left menu
        $productAndSubProduct = array();
        foreach ($product_cate as $key => $cate) {
            $productAndSubProduct[$key]['cate'] = $cate;
            foreach ($product_sub_cate as $key2 => $subcate) {
                if ($subcate['category_id'] == $cate['id']) {
                    $productAndSubProduct[$key]['cate']['subcate'][$key2] = $subcate;
                }
            }
        }
        return $productAndSubProduct;
    }

    public function index() {
        $productAndSubProduct = $this->getcategory();
        $articles = Article::with('author')->orderBy('position', 'DESC')->orderBy('created_at', 'DESC')->limit(4)->get();
        $limit = 10;
        $photoAlbums = PhotoAlbum::select(array(
            'photo_albums.id',
            'photo_albums.name',
            'photo_albums.description',
            'photo_albums.folder_id',
            DB::raw('(select filename from photos WHERE album_cover=1 AND deleted_at IS NULL and photos.photo_album_id=photo_albums.id LIMIT 1) AS album_image'),
            DB::raw('(select filename from photos WHERE photos.photo_album_id=photo_albums.id AND deleted_at IS NULL ORDER BY position ASC, id ASC LIMIT 1) AS album_image_first')
        ))->limit(8)->get();



        $homeProductCate = ProductCategory::take($limit)->get();
        //get data product and category for home page

        $pro_home = array();
        foreach ($homeProductCate as $key => $productcate) {
            $pro_home[$key]['id'] = $productcate->id;
            $pro_home[$key]['name'] = $productcate->name;
            $pro_home[$key]['product'] = DB::table('product_sub_category')->where('product_sub_category.category_id', $productcate->id)
                ->join('products', 'products.sub_category_id', '=', 'product_sub_category.id')->get();
        }
        $sliders = Product::where('showathome', 1)->take(5)->get();
        if(count($sliders)<3){
            $sliders = Product::orderByRaw("RAND()")->take(5)->get();
        }
        return view('pages.home', compact('articles', 'photoAlbums', 'product_cate', 'productAndSubProduct', 'pro_home','sliders'));
    }

    public function productdetail($param = null) {
        $productAndSubProduct = $this->getcategory();
        return view('product.detail', compact('param', 'productAndSubProduct'));
    }

    public function productcategory($productcateid) {
        $productAndSubProduct = $this->getcategory();
        $productcate = ProductCategory::find($productcateid);
        $productbycate = DB::table('product_sub_category')
            ->where('product_sub_category.category_id', $productcateid)
            ->join('products', 'products.sub_category_id', '=', 'product_sub_category.id')->get();

        return view('product.productbycate', compact('productcate','productbycate','productAndSubProduct'));
    }
    public function productsubcategory($productsubcateid) {
        $productAndSubProduct = $this->getcategory();
        $productsubcate = ProductSubCategory::find($productsubcateid);

        $productbysubcate = DB::table('products')
            ->where('products.sub_category_id', $productsubcateid)->get();

        return view('product.productbysubcate', compact('productsubcate','productbysubcate','productAndSubProduct'));
    }
    public function search(){
//        if(Request::isMethod('post')){
//            $params= Request::all();
//            $search_result;
//            if(!empty($params['search'])){
//                $search = $params['search'];
//                $search_result = DB::table('products')
//                    ->where('title', 'like', '%'.$search.'%')
//                    ->get();
//
//            }
////            dd($search_result);
//            return view('product.search', ['params'=>$params['search'],'search_result'=>$search_result]);
//        }
//
//        return view('product.search');
        $keyword = Input::get('search');
        $searchTerms = explode(' ', $keyword);
        $query = DB::table('products');
        foreach($searchTerms as $term)
        {
            $query->where('title', 'LIKE', '%'. $term .'%');
        }
        $results = $query->get();
        return view('product.search', ['params'=>$keyword,'search_result'=>$results,'productAndSubProduct'=>  $this->getcategory()]);
    }
    public function product($productid){
        if(!empty($productid)){
            $product = Product::find($productid);
        }
        $category = $product->sub_category_id;
        $commonCate = Product::where('sub_category_id', '=', $category)->where('id', '!=', $productid)->paginate(3);
        return view('product.detail', ['product'=>$product,'productAndSubProduct'=> $this->getcategory(),'commonCate'=>$commonCate]);
    }

}