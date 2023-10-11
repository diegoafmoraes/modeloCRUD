<?php
namespace Core;

class Controller {

	public function __construct() {

		define("VALID_URI", "Home");

	}

	// Abre so uma pagina sem template (para gerar um pdf, por ex.)
	public function loadView($viewName, $viewData = array()) {
		extract($viewData);
		require 'Views/'.$viewName.'.php';
	}

	// Carrega o template geral
	public function loadTemplate($viewName, $viewData = array()) {
		require 'Views/template/default.php';
	}

	// Carrega uma view (variavel pela url), dentro do template geral
	public static function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);
		require 'Views/'.$viewName.'.php';
	}

	// Carrega um modulo dentro do template (um cabecalho ou um menu lateral, um rodape)
	public function loadModule($modName, $viewData = array()) {
		extract($viewData);
		require 'Modules/'.$modName.'.php';
	}

	// Carrega um helper (formatar moeda, datas, etc...)
	public function loadHelper($helperName) {
		require 'Helpers/'.$helperName.'.php';
	}

}