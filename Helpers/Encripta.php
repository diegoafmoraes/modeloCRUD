<?php 
namespace Helpers;

class Encripta {

	// helper encripta senhas
	public function criarHash($senha)
	{
		// VEJA QUE PRIMEIRO EU VOU GERAR UM SALT JÁ ENCRIPTADO EM MD5
		$salt = md5("aquiPODEserQUALQUERcoisaPOISéUMhash");
		//PRIMEIRA ENCRIPTAÇÃO ENCRIPTANDO COM crypt
		$codifica = crypt($senha,$salt);
		// SEGUNDA ENCRIPTAÇÃO COM sha512 (128 bits)
		$codifica = hash('sha512', $codifica);
		//AGORA RETORNO O VALOR FINAL ENCRIPTADO
		return $codifica;
	}

}