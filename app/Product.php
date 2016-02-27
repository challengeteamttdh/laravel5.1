<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Entity
{
    use SoftDeletes;
    protected $table = 'product';
    protected $dates = ['deleted_at'];
    protected $guarded = array('id');
    
    public function productCategory() {
        return $this->belongsTo('App\ProductCategory');
    }

    /**
     * Get the category's language.
     *
     * @return Language
     */
    
//    public function productSubCategory() {
//        return $this->belongsTo('App\ProductSubCategory');
//    }
    
}
