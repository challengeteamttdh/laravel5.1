<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Entity {

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = array('id');
    public $table = "product_category";
    /**
     * Returns a formatted post content entry,
     * this ensures that line breaks are returned.
     *
     * @return string
     */
    public function description() {
        return nl2br($this->description);
    }

    /**
     * Get the product of this.
     *
     * @return array
     */
    public function product() {
        return $this->hasMany('App\Product');
    }

    /**
     * Get the product of this.
     *
     * @return array
     */
    public function subcategory() {
        return $this->hasMany('App\ProductSubCategory');
    }

    /**
     * Get the category's language.
     *
     * @return Language
     */
    public function language() {
        return $this->belongsTo('App\Language');
    }
}
