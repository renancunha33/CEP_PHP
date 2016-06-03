<?php

	if(isset($_GET['cep'])){

		$cep = filter_input(INPUT_GET, 'cep');

		if(empty($cep)){
			echo 'Informe o CEP!';
		}else{


			function get_endereco($cepp){

				$cepp = preg_replace("/[^0-9]/", "", $cepp);
				$url = "http://viacep.com.br/ws/$cepp/xml/";

				$xml = simplexml_load_file($url);
				return $xml;
			}

			$endereco = (get_endereco($cep));

			echo "<input type='text' value=' $endereco->logradouro ,$endereco->bairro, $endereco->localidade, $endereco->uf' size='110' autofocus/>";
			
		}
	}
	?>