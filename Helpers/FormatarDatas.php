<?php 

class FormatarDatas {

	function datebd2view($val) {
		
		$dia = substr($val, 8,2);
		$mes = substr($val, 5,2); 
		$ano = substr($val, 0,4);
		
		$hora = substr($val, 11, 2);
		$min = substr($val, 14,2);	
		$seg = substr($val, 17,2);	
		
		$fulldate = $dia . "/".$mes . "/".$ano. " ".$hora . ":".$min . ":".$seg;
		return $fulldate ;
	}

	function dateview2bd($val) {
		
		$dia = substr($val, 0,2);
		$mes = substr($val, 3,2); 
		$ano = substr($val, 6,4);

		$hora = substr($val, 11, 2);
		$min = substr($val, 14,2);	
		$seg = substr($val, 17,2);	
		
		$fulldate = $ano."-".$mes."-".$dia." ".$hora . ":".$min . ":".$seg;
		return $fulldate ;
	}

	function simpledatebd2view($val) {
		
		$dia = substr($val, 8,2);
		$mes = substr($val, 5,2); 
		$ano = substr($val, 0,4);
	/*	
		$hora = substr($val, 11, 2);
		$min = substr($val, 14,2);	
		$seg = substr($val, 17,2);	
	*/
	#	$fulldate = $dia . "/".$mes . "/".$ano. " ".$hora . ":".$min . ":".$seg;
		
		$date = $dia . "/".$mes . "/".$ano;
		
		return $date ;
	}

	function simpledateview2bd($val) {
		
		#echo $val; exit;

		$dia = substr($val, 0,2);
		$mes = substr($val, 3,2);
		$ano = substr($val, 6,4);
	/*	
		$hora = substr($val, 11, 2);
		$min = substr($val, 14,2);	
		$seg = substr($val, 17,2);	
	*/
	#	$fulldate = $dia . "/".$mes . "/".$ano. " ".$hora . ":".$min . ":".$seg;
		
		$date = $ano . "-".$mes . "-".$dia;
		
		return $date ;
	}

	function convertHoras($horasInteiras) {

	    // Define o formato de saida
	    $formato = '%02d:%02d';
	    // Converte para minutos
	    $minutos = $horasInteiras * 60;

	    // Converte para o formato hora
	    $horas = floor($minutos / 60);
	    $minutos = ($minutos % 60);

	    // Retorna o valor
	    return sprintf($formato, $horas, $minutos);
	}

}