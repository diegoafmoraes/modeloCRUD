<?php
namespace Controllers;

use \Controllers\BaseController;
use \Models\Usuarios;

class HomeController extends BaseController {

	public function __construct() {

		parent::__construct();

	}

	/**
	 * View principal 
	 * 
	 * @return void
	 */
	public function index() {
		$array = array();

		$usuarios = new Usuarios();
		$array['title'] = parent::viewTitle();
		$array['listaUsers'] = $usuarios->getAll();
		$array['copy'] = $this->viewCopyright();

		parent::loadTemplate('home', $array);
	}

	/**
	  * Recebe dados do Form
	  * 
	  * @return array
	  */ 
	public function enviaEmail() {

		// dd($_POST);	
		// -----------------------------------

		/**
		 * EXIBIR ERROS (PARA TESTES)
		 */
		// ini_set( 'display_errors', 1 );
    	// error_reporting( E_ALL );
	 	/**
    	 * CABECALHOS
    	 */
		$to      = 'financeiro@entusiasta.com.br';
		$subject = 'Site - Form Contrato de Estagiário: ' . $_POST['nomeEmpresa'];

		// To send HTML mail, the Content-type header must be set
		$headers[] = 'MIME-Version: 1.0';
		// $headers[] = 'Content-type: text/html; charset=iso-8859-1';
		$headers[] = 'Content-type: text/html; charset=uTF-8';

		// Additional headers
		$headers[] = 'To: Missão RH <missaorh@entusiasta.com.br>';
		$headers[] = 'From: atendimento@entusiasta.com.br';
		$headers[] = 'Reply-To:'.$to;

		/**
		 * MENSAGEM
		 */
		$message = '
					<html>
					<head>
					  <title>Abrir Vaga</title>
					  <style type="tet/css">
						  th, td {
							  padding: 10px;
						  }
					  </style>
					</head>
					<body>';
		$message .= "<h1>Solicitação de Aberturade Vaga</h1>"."\r\n";
		$message .= "<hr />"."\r\n";
		$message .= "<table border='1' width='100%'>"."\r\n";
		$message .= "  <thead>"."\r\n";
		$message .= "  	 <tr>"."\r\n";
		$message .= "  	  <th> Item </th>"."\r\n";
		$message .= "  	  <th>Valor"."\r\n";
		$message .= "  	 </tr>"."\r\n";
		$message .= "  </thead>"."\r\n";
		$message .= "  <tbody>"."\r\n";

		$message .= "  	<tr>"."\r\n";		
		$message .= "  	  <td>Nome Empresa</td>"."\r\n";
		$message .= "  	  <td>".$_POST['nomeEmpresa']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		// $message .= "  	<tr>"."\r\n";		
		// $message .= "  	  <td>Pessoa de Contato</td>"."\r\n";
		// $message .= "  	  <td>".$_POST['nomePessoaContato']."</td>"."\r\n";
		// $message .= "  	</tr>"."\r\n";
		// $message .= "  	<tr>"."\r\n";
		// $message .= "  	  <td>E-mail</td>"."\r\n";
		// $message .= "  	  <td>".$_POST['email']."</td>"."\r\n";
		// $message .= "  	</tr>"."\r\n";
		// $message .= "  	<tr>"."\r\n";
		// $message .= "  	  <td>Telefone</td>"."\r\n";
		// $message .= "  	  <td>".$_POST['telefone']."</td>"."\r\n";
		// $message .= "  	</tr>"."\r\n";
		// $message .= "  	<tr>"."\r\n";
		// $message .= "  	  <td>Celular</td>"."\r\n";
		// $message .= "  	  <td>".$_POST['cel']."</td>"."\r\n";
		// $message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>Nome Estagiário</td>"."\r\n";
		$message .= "  	  <td>".$_POST['nome']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>Data de Nascimento</td>"."\r\n";
		$message .= "  	  <td>".$_POST['data_nasc']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>CPF</td>"."\r\n";
		$message .= "  	  <td>".$_POST['cpf']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		// $message .= "  	<tr>"."\r\n";
		// $message .= "  	  <td>Forma de Contratação</td>"."\r\n";
		// $message .= "  	  <td>";
		// 					foreach($_POST['formaCont'] as $ifc => $vfc):
		// $message .=				$vfc."\r\n";
		// 					endforeach;
		// $message .= "	  </td>"."\r\n";
		// $message .= "  	</tr>"."\r\n";

		// $message .= "  	<tr>"."\r\n";
		// $message .= "  	  <td>Sexo</td>"."\r\n";
		// $message .= "  	  <td>";
		// 					foreach($_POST['sexo'] as $isx => $vsx):
		// $message .=				$vsx."\r\n";
		// 					endforeach;
		// $message .= "	  </td>"."\r\n";
		// $message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>Endereço</td>"."\r\n";
		$message .= "  	  <td>".$_POST['endereco']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>Cidade</td>"."\r\n";
		$message .= "  	  <td>".$_POST['cidade']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>Estado</td>"."\r\n";
		$message .= "  	  <td>".$_POST['estado']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>Telefone</td>"."\r\n";
		$message .= "  	  <td>".$_POST['telefone']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>Celular</td>"."\r\n";
		$message .= "  	  <td>".$_POST['cel']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>E-mail</td>"."\r\n";
		$message .= "  	  <td>".$_POST['email']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>Curso</td>"."\r\n";
		$message .= "  	  <td>".$_POST['curso']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>Ano/Semestre atual</td>"."\r\n";
		$message .= "  	  <td>".$_POST['ano_sem']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>Ano de Conclusão</td>"."\r\n";
		$message .= "  	  <td>".$_POST['ano_conc']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>Nível</td>"."\r\n";
		$message .= "  	  <td>".$_POST['nivel']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  	<tr>"."\r\n";
		$message .= "  	  <td>Matrícula</td>"."\r\n";
		$message .= "  	  <td>R$ ".$_POST['matricula']."</td>"."\r\n";
		$message .= "  	</tr>"."\r\n";

		$message .= "  </tbody>"."\r\n";
		$message .= "</table>"."\r\n";
		$message .= "</body>
					</html>";
		
		// Se for
		if( mail($to, $subject, $message, implode("\r\n", $headers)) ) {
			// Agradecimento
			header("Location:".BASE_URL."home/tks");
		} // senao
		else {
			// Sorry...
			header("Location:".BASE_URL."home/sorry");
		}

	}

	/**
	 * Pg Agradecimento
	 * 
	 * @return void
	 */
	public function tks() {
		$array = array();

		/*$usuarios = new Usuarios();
		$array['lista'] = $usuarios->getAll();*/
		$array['title'] = parent::viewTitle();
		$array['copy'] = $this->viewCopyright();

		$this->loadTemplate('tks', $array);

	}

	/**
	 * Pg Desculpas
	 * 
	 * @return void
	 */
	public function sorry() {
		$array = array();

/*		$usuarios = new Usuarios();
		$array['lista'] = $usuarios->getAll();*/
		$array['title'] = parent::viewTitle();
		$array['copy'] = $this->viewCopyright();

		$this->loadTemplate('sorry', $array);

	}


}