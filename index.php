<!DOCTYPE html>
<html>
<head>
	<title>Sistema de Gerenciamento de Frutas</title>
</head>
<body>
	<h1>Sys Frutas</h1>

	<br><h4>Menu Principal</h4></br>
		<form action="listafruta.php" method="POST">
			<input type="submit" name="enviar" value="Listar Frutas">
		</form>	

	<form action="cadfruta.php" method="POST">
			<h4>Cadastro de Frutas</h4>
			Nome da Fruta <input type="text" name="nomeFruta">
			<p>Quantidade em Estoque <input type="text" name="quantidadeFruta"></p>
			<p> Preço <input type="text" name="precoFruta">
			<p> Tipo da Fruta <input type="text" name="tipoFruta">
			<p> <input type="submit" name="enviar" value="Cadastrar Fruta">
	</form>
	<form action="cadtipo.php" method="POST">
			<h4>Cadastro de Tipos de Frutas</h4>
			Nome do Tipo <input type="text" name="nomeTipo">
			<p>Unidade de Medida <select name="unidadeMedida">
				<option value="Kilograma">Kilograma	</option>
				<option value="Grama">	Grama		</option>
				<option value="Tonelada">Tonelada	</option>
			</select>
			<p> Peso <input type="text" name="Peso">
			<p> <input type="submit" name="enviar" value="Cadastrar Tipo">

	</form>
		
</body>
</html>
