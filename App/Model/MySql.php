<?php

namespace App\Model;
use PDO;

class MySql{

	public static $PDO;

	public static function con(){

		if (self::$PDO == null) {
			try {
				self::$PDO = new PDO('mysql: host='.bd['host'].'; dbname='.bd['name'], bd['user'], bd['pass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
				self::$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (\Throwable $th) {
				echo "<h1>ERROR AO SE CONECTAR NO SERVIDOR $th</h1>";
			}# code...
		}

		return self::$PDO;
	}
}