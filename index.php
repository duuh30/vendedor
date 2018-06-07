<?php
$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
$pesquisa_tipo = $conn->query("SELECT nome_tipo FROM tipo_fruta");

?>


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
			Nome da Fruta <input type="text" name="nomeFruta" required="required">
			<p>Quantidade em Estoque <input type="text" name="quantidadeFruta"></p>
			<p> Preço <input type="text" name="precoFruta">
			<p> Tipo da Fruta <select name="tipoFruta" required="required">
				<option>Selecione o tipo da fruta</option>
				<?php //foreach para percorrer o retorno sql para mostrar o nome_tipo das frutas e jogar no select
					foreach($pesquisa_tipo as $row){ // fecha a primeira tag php?> 
					<option> <?php echo $row['nome_tipo']; ?></option>
					<?php } ?>
				?>
			</select> 
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


<?php

$conn = new PDO('mysql:host=localhost;dbname=mercado', 'root','');

?>