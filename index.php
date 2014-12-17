<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>calculadora</title>
</head>
<body>
	
	<h3>Resultado: <?php echo $_COOKIE["resultado"]; ?></h3>
	
	<form method="POST" action="calculando.php">
		<p>
			<label>Numero 1</label><br>
			<input type="text" name="numero1" id="numero1" placeholder="Digite o primeiro número">
		</p>

		<p>
			<label>Numero 2</label><br>
			<input type="text" name="numero2" id="numero2" placeholder="Digite o segundo número">
		</p>

		<p>
			<input type="radio" name="operador" value="+" id="">
			<label>Soma</label>
		</p>
		<p>
			<input type="radio" name="operador" value="-" id="">
			<label>Subitração</label>
		</p>
		<p>
			<input type="radio" name="operador" value="*" id="">
			<label>Multiplicação</label>
		</p>
		<p>
			<input type="radio" name="operador" value="/" id="">
			<label >Divisão</label>
		</p>
		<p>
		<input type="submit" value="Calcular">
		</p>
	</form>
	<span>Calculadora desenvolvida por Leonardo</span>

</body>
</html>