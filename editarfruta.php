<?php
	$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
	$pesquisa_tipo = $conn->query("SELECT id FROM tipo_fruta");
	$id = filter_input(INPUT_GET, 'id');
	$resultado_pesquisa_fruta = $conn->query("SELECT * FROM frutas WHERE id_fruta=$id");
	foreach ($resultado_pesquisa_fruta as $row) {
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Editar Fruta</title>
</head>
<body>
	<h2>Editar Frutas</h2>
	<form action="editardadosfrutas.php" method="POST">
	<input type="hidden" name="id"  value= <?php echo $row['id_fruta']; ?>>
	<p>Nome da Fruta <input type="text" name="nomeFruta" value=<?php echo $row['nome']; ?>></p>
	<p>Quantidade em Estoque <input type="text" name="quantidadeFruta" value= <?php echo $row['quantidade']; ?> ></p>
	<p>Preço <input type="text" name="preco" value=<?php echo $row['preco'];?> ></p>
	<p> Tipo da Fruta <select name="tipoFruta">
			<option> <?php echo $row['id_tipo_fruta']; ?>  </option>
				<?php //foreach para percorrer o retorno sql para mostrar o id das frutas e jogar no select
					foreach($pesquisa_tipo as $row){ // fecha a primeira tag php?> 
					<option> <?php echo $row['id']; ?></option>
					<?php } ?>
				?>
			</select> 
		<br> <p><input type="submit" name="enviarDados" value="Editar Fruta"> </br> </p>
		<button> <a href="index.php"> Voltar para Menu </a> </button>
		<button> <a href="listafruta.php"> Voltar para Lista de Frutas </a> </button>
	</form>
</body>
</html>
