<?php
require 'environment.php';

global $config;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/test/site/");
	$config['host']	  = 'localhost';
	$config['dbname'] = 'projetos_entusia_estagiarios';
	$config['dbuser'] = 'admin';
	$config['dbpass'] = 'admin';
} else {
	define("MAIN_URL", "https://missaorh.com.br/");
	define("BASE_URL", "https://entusiasta.com.br/contrato-estagiarios/");
	$config['host']	  = 'localhost';
	$config['dbname'] = 'missao84_providencia_estagios';
	$config['dbuser'] = 'missao84_provusr';
	$config['dbpass'] = '9KNsj)mPm=}3';
}

// Hora Certa e Fuso sem Horario de Verao
date_default_timezone_set('America/Sao_Paulo');