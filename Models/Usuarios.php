<?php
namespace Models;

use \Models\BaseModel;

class Usuarios extends BaseModel {

	public function getAll() {
		$array = array();

		$sql = "SELECT * FROM admin";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $this->fetAll($sql);
		}

		return $array;
	}

}