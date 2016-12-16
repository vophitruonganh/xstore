<?php

namespace Xstore\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{

	/**
	 * Class Constructor
	 */
	public function __construct()
	{
		parent::__construct();
	}


	public function index(){

	}

    public function showSite()
    {
        return view('home');
    }
}
