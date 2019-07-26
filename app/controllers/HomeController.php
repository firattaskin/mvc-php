<?php

namespace Controllers;
use Models\User;
use \Application\Controller as Controller;

class HomeController extends Controller
{
	
	function __construct(){

	}

	public function index(){
		$x = User::all();
		echo "<pre>";
		print_r($x->toArray());
	}

	public function test(){
		$this->view("home",["isim"=>"firat"]);
	}
}