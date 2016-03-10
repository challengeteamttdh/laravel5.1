<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Photo;
use Illuminate\Http\Request;

class PagesController extends Controller {

	public function welcome()
	{
		return view('pages.welcome');
	}

	public function about()
	{
            $about = Photo::find(1);
            return view('pages.about',  compact('about'));
	}

	public function contact()
	{
            return view('pages.contact');
	}

}
