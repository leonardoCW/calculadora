<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calculadora</title>

	<!-- Incluimos a biblioteca do jquery -->
	<script type="text/javascript" language="javascript" src="js/jquery-1.3.2.js"></script>
	
	<!-- Criamos as funções necessárias para envio do formulário -->
	<script type="text/javascript" language="javascript">
	$(function($) {
		
		// Quando o formulário for enviado, essa função é chamada
		$("#formulario").submit(function() {
			
			// Camos os valores de cada campo em uma váriavel para facilitar a manipulação
			var numero1 = $("#numero1").val();
			var numero2 = $("#numero2").val();
			var operador = $("#operador").val();

			// Fazemos a requisão ajax com o arquivo envia.php e enviamos os valores de cada campo através do método POST
			$.post('envia.php', {numero1: numero1, numero2: numero2, operador: operador}, function(resposta) {
					
					// Quando terminada a requisição
					// Exibe o calculo feito
						$("#numero1").val('');
						// Coloca a mensagem no div de mensagens
						$("#atual").prepend("<strong>"+ numero1 + " </strong><br />");
			});
		});
	});
	</script>

</head>
<body>


<!-- ATUALIZAR CONSULTA AO BANCO -->
	<script src="js/prototype.js"></script>
	
	<script>
	function getResultado()
	{
	  new Ajax.Updater( 'atualiza', 'atualiza.php', {
	    onSuccess: function() { window.setTimeout( getResultado, 1000 ); }
	  } );
	}
	getResultado();
	</script>
	
<!-- EXIBIR O RESULTADO -->
	<div id="status"></div>
	<h3><div id="atual"></div></h3>
	<h3>Resultado: <div id="atualiza"></div></h3>
	
<!-- INSERIR DADOS A CALCULADORA -->
	<div id="escrever">
		<form id="formulario" action="javascript:func()" method="post">
			<p>
				<label>Numero 1</label><br>
				<input type="text" name="numero1" id="numero1" placeholder="Digite o primeiro número">
			</p>

			<p>
				<label>Numero 2</label><br>
				<input type="hidden" name="numero2" id="numero2" value="0">
			</p>

			<p>
				<input type="radio" name="operador" value="+" id="operador">
				<label>Soma</label>
			</p>
			<p>
				<input type="radio" name="operador" value="-" id="operador">
				<label>Subitração</label>
			</p>
			<p>
				<input type="radio" name="operador" value="*" id="operador">
				<label>Multiplicação</label>
			</p>
			<p>
				<input type="radio" name="operador" value="/" id="operador">
				<label >Divisão</label>
			</p>
			<p>
			<input type="submit" value="Calcular">
			</p>
		</form>
	</div>

	

	<span>Calculadora desenvolvida por Leonardo</span>

</body>
</html>