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

			echo "Rua: $endereco->logradouro <br>";
			echo "Bairro: $endereco->bairro <br>";
			echo "Cidade: $endereco->localidade <br>";
			echo "Estado: $endereco->uf <br>";


		}
	}
	?>