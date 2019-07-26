<?php
namespace System;
use Illuminate\Database\Capsule\Manager as Capsule;
class Database 
{
	
	function __construct(){
		$capsule = new Capsule;
		$db_data = require_once('config/database.php');
		$capsule->addConnection($db_data);
		$capsule->setAsGlobal();
		$capsule->bootEloquent();
	}
}