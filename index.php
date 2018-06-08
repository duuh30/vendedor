<?php
$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
$pesquisa_tipo = $conn->query("SELECT nome_tipo FROM tipo_fruta");
$pesquisa_unidade = $conn->query("SELECT nome_unidade FROM unimedida");

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
			Nome da Fruta <input type="text" name="nomeFruta">
			<p>Quantidade em Estoque <input type="text" name="quantidadeFruta"></p>
			<p> Preço <input type="text" name="precoFruta">
			<p> Tipo da Fruta <select name="tipoFruta" required="required">
				<option> Selecione... </option>
				<?php //foreach para percorrer o retorno sql para mostrar o nome_tipo das frutas e jogar no select
					foreach($pesquisa_tipo as $row){ // fecha a primeira tag php?> 
					<option> <?php echo $row['nome_tipo']; ?></option>
					<?php } ?>
				?>
			</select> 
			<p> Unidade de Medida <select name="unidade">
				<option> Selecione... </option>
				<?php
				foreach($pesquisa_unidade as $row){ ?>
					<option> <?php echo $row['nome_unidade']; ?> </option>
				<?php } ?>
				
			</select>
			<p> <input type="submit" name="enviarFruta" value="Cadastrar Fruta">
	</form>
	<form action="cadtipo.php" method="POST">
			<h4>Cadastro de Tipos de Frutas</h4>
			Nome do Tipo <input type="text" name="nomeTipo">
			<p> <input type="submit" name="enviarTipo" value="Cadastrar Tipo">

	</form>
	<form action="cadmedida.php" method="POST">
		<h4>Cadastro de Unidade de Medidas</h4>
		<p>Grandeza <input type="text" name="grandeza"> </p>
		<p>Nome da Unidade <input type="text" name="nome_unidade"></p>
		<p>Símbolo da Medida <input type="text" name="simbolo"> </p>
		<p> <input type="submit" name="enviarMedida" value="Cadastrar Unidade de Medida">
	</form>	
</body>
</html>
