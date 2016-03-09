<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageChooserController extends Controller
{
    /**
     *
     */
    public function chooser($lang)
    {
        Session::put('locale', $lang);
        return redirect('about');
    }
}
