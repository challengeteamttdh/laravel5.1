<?php

/****************   Model binding into route **************************/
Route::model('article', 'App\Article');
Route::model('articlecategory', 'App\ArticleCategory');
Route::model('language', 'App\Language');
Route::model('photoalbum', 'App\PhotoAlbum');
Route::model('photo', 'App\Photo');
Route::model('user', 'App\User');
Route::model('productsubcategory', 'App\ProductSubCategory');
Route::model('color', 'App\Color');
Route::model('material', 'App\Material');
Route::model('producer', 'App\Producer');
Route::model('product', 'App\Product');
Route::pattern('id', '[0-9]+');
Route::pattern('slug', '[0-9a-z-_]+');

/***************    Site routes  **********************************/
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('product', 'HomeController@productdetail');
Route::get('product-category-{productcateid}', 'HomeController@productcategory');
Route::get('product-sub-category-{productsubcateid}', 'HomeController@productsubcategory');
Route::get('product-{productid}', 'HomeController@product');
Route::any('search', 'HomeController@search');
Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');
Route::get('articles', 'ArticlesController@index');
Route::get('article/{slug}', 'ArticlesController@show');
Route::get('video/{id}', 'VideoController@show');
Route::get('photo/{id}', 'PhotoController@show');

Route::get('language/{lang}', function($lang){
    Session::put('locale', $lang);
    return redirect('about');
});

/***************    Admin Login LogOut routes  **********************************/
get('/register', array('as' => 'register', 'uses' => 'Auth\AuthController@getRegister'));
post('/register', array('as' => 'register', 'uses' => 'Auth\AuthController@postRegister'));
get('/admin', array('as' => 'login', 'uses' => 'Auth\AuthController@getLogin'));
post('/admin', array('as' => 'login', 'uses' => 'Auth\AuthController@postLogin'));

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

/***************    Admin routes  **********************************/
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {

    # Admin Dashboard
    Route::get('dashboard', 'Admin\DashboardController@index');

    # Product Category
    Route::any('productcategory/create', 'Admin\ProductCategoryController@create');
    Route::any('productcategory/edit/{id}', 'Admin\ProductCategoryController@edit');
    Route::any('productcategory/delete/{id}', 'Admin\ProductCategoryController@delete');
    Route::any('productcategory', 'Admin\ProductCategoryController@index');

    # Product SubCategory
    Route::get('productsubcategory/data', 'Admin\ProductSubcategoryController@data');
    Route::get('productsubcategory/{productsubcategory}/show', 'Admin\ProductSubcategoryController@show');
    Route::get('productsubcategory/{productsubcategory}/edit', 'Admin\ProductSubcategoryController@edit');
    Route::get('productsubcategory/{productsubcategory}/delete', 'Admin\ProductSubcategoryController@delete');
    Route::get('productsubcategory/reorder', 'ProductSubcategoryController@getReorder');
    Route::resource('productsubcategory', 'Admin\ProductSubcategoryController');

    # Product
    Route::any('product/create', 'Admin\ProductController@create');
    Route::any('product/showathome/{id}', 'Admin\ProductController@showAtHomepage');
    Route::any('product/edit/{id}', 'Admin\ProductController@edit');
    Route::any('product/delete/{id}', 'Admin\ProductController@delete');
    Route::any('product', 'Admin\ProductController@index');

    # Language
    Route::get('language/data', 'Admin\LanguageController@data');
    Route::get('language/{language}/show', 'Admin\LanguageController@show');
    Route::get('language/{language}/edit', 'Admin\LanguageController@edit');
    Route::get('language/{language}/delete', 'Admin\LanguageController@delete');
    Route::resource('language', 'Admin\LanguageController');

    # Article category
    Route::get('articlecategory/data', 'Admin\ArticleCategoriesController@data');
    Route::get('articlecategory/{articlecategory}/show', 'Admin\ArticleCategoriesController@show');
    Route::get('articlecategory/{articlecategory}/edit', 'Admin\ArticleCategoriesController@edit');
    Route::get('articlecategory/{articlecategory}/delete', 'Admin\ArticleCategoriesController@delete');
    Route::get('articlecategory/reorder', 'ArticleCategoriesController@getReorder');
    Route::resource('articlecategory', 'Admin\ArticleCategoriesController');

    # Articles
    Route::get('article/data', 'Admin\ArticleController@data');
    Route::get('article/{article}/show', 'Admin\ArticleController@show');
    Route::get('article/{article}/edit', 'Admin\ArticleController@edit');
    Route::get('article/{article}/delete', 'Admin\ArticleController@delete');
    Route::get('article/reorder', 'Admin\ArticleController@getReorder');
    Route::resource('article', 'Admin\ArticleController');

    # Photo Album
    Route::get('photoalbum/data', 'Admin\PhotoAlbumController@data');
    Route::get('photoalbum/{photoalbum}/show', 'Admin\PhotoAlbumController@show');
    Route::get('photoalbum/{photoalbum}/edit', 'Admin\PhotoAlbumController@edit');
    Route::get('photoalbum/{photoalbum}/delete', 'Admin\PhotoAlbumController@delete');
    Route::resource('photoalbum', 'Admin\PhotoAlbumController');

    # Photo
    Route::get('photo/data', 'Admin\PhotoController@data');
    Route::get('photo/{photo}/show', 'Admin\PhotoController@show');
    Route::get('photo/{photo}/edit', 'Admin\PhotoController@edit');
    Route::get('photo/{photo}/delete', 'Admin\PhotoController@delete');
    Route::resource('photo', 'Admin\PhotoController');

    # Users
    Route::get('user/data', 'Admin\UserController@data');
    Route::get('user/{user}/show', 'Admin\UserController@show');
    Route::get('user/{user}/edit', 'Admin\UserController@edit');
    Route::get('user/{user}/delete', 'Admin\UserController@delete');
    Route::resource('user', 'Admin\UserController');

    # Colors
    Route::get('color/data', 'Admin\ColorController@data');
    Route::get('color/{color}/show', 'Admin\ColorController@show');
    Route::get('color/{color}/edit', 'Admin\ColorController@edit');
    Route::get('color/{color}/delete', 'Admin\ColorController@delete');
    Route::resource('color', 'Admin\ColorController');

    # Producer
    Route::get('producer/data', 'Admin\ProducerController@data');
    Route::get('producer/{producer}/show', 'Admin\ProducerController@show');
    Route::get('producer/{producer}/edit', 'Admin\ProducerController@edit');
    Route::get('producer/{producer}/delete', 'Admin\ProducerController@delete');
    Route::resource('producer', 'Admin\ProducerController');

    # Material
    Route::get('material/data', 'Admin\MaterialController@data');
    Route::get('material/{material}/show', 'Admin\MaterialController@show');
    Route::get('material/{material}/edit', 'Admin\MaterialController@edit');
    Route::get('material/{material}/delete', 'Admin\MaterialController@delete');
    Route::resource('material', 'Admin\MaterialController');

    # Articles
    Route::get('product/data', 'Admin\ProductController@data');
    Route::get('product/{product}/show', 'Admin\ProductController@show');
    Route::get('product/{product}/edit', 'Admin\ProductController@edit');
    Route::get('product/{product}/delete', 'Admin\ProductController@delete');
    Route::get('product/reorder', 'Admin\ProductController@getReorder');
    Route::resource('product', 'Admin\ProductController');

});
