<?php
namespace Core;

use \PDO;

class Connect {

	public function __construct() {

		global $db;
		global $config;
		try	{
			$db = new PDO("mysql:dbname=".$config['dbname']."; port=3306; host=".$config['host'], $config['dbuser'], $config['dbpass']);
			} catch(PDOException $e) {
				echo "ERRO: ".$e->getMessage();
				exit;
			}
		
	}

}