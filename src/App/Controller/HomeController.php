<?php
namespace App\Controller;

use SkankyDev\Controller\MasterController;

class HomeController extends MasterController {

	public function index(){
		return view('home.index');
	}

}
