<?php
namespace Models;

use \Core\Model;

class BaseModel extends Model {

	public function __construct() {
		parent::__construct();
	}

	/**
	 * FetchAll
	 */
	public function fetAll($sql) {

		return $sql->fetchAll(\PDO::FETCH_OBJ);

	}

	/**
	 * Fetch
	 */
	public function fet($sql) {

		return $sql->fetch(\PDO::FETCH_OBJ);

	}

}