<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producer extends Entity
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded  = array('id');

    /**
     * Returns a formatted post content entry,
     * this ensures that line breaks are returned.
     *
     * @return string
     */
    public function description() {
        return nl2br($this->description);
    }

}
