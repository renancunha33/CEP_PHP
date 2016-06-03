<html>
<head>
	<title>CEP</title>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#enviar").click(function(){
			//recebe valor dos campos de texto
			var cep = document.getElementsByName("cep")[0].value;
						//chama ajax
						ajax(cep);
					});
	});
	function ajax(cep){
		//previne contra reload
		event.preventDefault();
		//envia data pro cadastro que insere os dados no BD
		$.ajax({
			url:"buscacep.php",
			type:"GET",
			data: {"cep":cep},
			success: function(data) {
				$("#res").html("");
				$("#res").append(data);
			}
		});
	}
	</script>	
</head>
<body>
	<form>
		<input type="text" name="cep" id=""/>
		<input type="submit" value="Buscar CEP" id="enviar"/>
	</form>
	<div id="res">
	</div>
</body>
</html>