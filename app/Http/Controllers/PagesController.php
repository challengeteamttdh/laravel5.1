<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Photo;
//use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Request;
use App\ProductCategory;
use App\ProductSubCategory;
use App\Product;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller {

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

    public function welcome() {
        return view('pages.welcome');
    }

    public function about() {
        $productAndSubProduct = $this->getcategory();
        $about = Photo::find(1);
        return view('pages.about', compact('about', 'productAndSubProduct'));
    }

    public function contact() {
        if (Request::isMethod('post')) {
            Mail::send('emails.welcome', ['key' => 'value'], function($message) {
                $message->to('phanthanhhak55hus@gmail.com', 'phan ha')->subject('Welcome!');
            });
            return redirect('contact')->with('status', 'Cảm ơn bạn đã follow, chúc bạn vui vẻ :D !');
        }
        $productAndSubProduct = $this->getcategory();
        return view('pages.contact', compact('productAndSubProduct'));
    }

}
