<?php
namespace Controllers;

use \Core\Controller;

class BaseController extends Controller {

	public static $getURL;
	public $nomeUser;
    private static $urlSegments;
    private static $title = 'Dados para Contrato de Estágios - Missão RH';
    private static $copy = "Todos os direitos reservados";

	public function __construct() {

		parent::__construct();

	}

	public function viewTitle() {

		return self::$title;

	}

	public function viewCopyright() {

		return self::$copy;

	}
 
	protected function setNome($nuser) {
        $this->nomeUser = $nuser;
    }

    protected function getNome() {
        return $this->nomeUser;
    }

    protected static function urlSegments() {
         self::$urlSegments = explode( '/', self::verURL() ); 
         return self::$urlSegments;
    }
    
	public static function verURL() {
		 return $_GET['url'];
	}

	// metodo para debug
	protected static function dd($array) {

		echo "<pre>"; print_r($array); exit;

	}

	protected function geraHash($param) {

		$p1 = md5($param);
		$p2 = sha1($param);
		$p3 = uniqid($param);
		$interval = rand(0, 98765432);

		$str = $p1 . $interval . $p2 . $interval . $p3;

		return substr($str, 0, 198);

	}

	protected function fakeName($param) {

		$p1 = md5($param);
		$p2 = sha1($param);
		$p3 = uniqid($param);
		$interval = rand(0, 98765432);

		$str = $p1 . $interval . $p2 . $interval . $p3;

		return substr($str, 0, 78);

	}




}