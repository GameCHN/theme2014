<?php namespace YC\Theme2014\Http\Controllers;

use YCMS\Modules\Routing\Controller;

class Theme2014Controller extends Controller {
	
	public function index()
	{
		return view('theme2014::index');
	}
	
}