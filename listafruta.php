<?php
		// Conecta com o Banco de Dados utilizando MYSQL PDO
			$conn = new PDO('mysql:host=localhost;dbname=mercado', 'root','');
		echo "<p>Frutas Listadas !</p>";
		// Parametro SQL para listar as frutas pelas colunas TIPO e NOME em ordem
			$pesquisa = $conn->query("SELECT id_fruta,id_tipo_fruta, nome, quantidade, preco FROM frutas ORDER BY id_fruta, id_tipo_fruta, nome, quantidade, preco");
				// foreach corre cada registro do banco
				foreach ($pesquisa as $row) { 

?>

<table border="1"> 
		<tr>
			<td>Código</td>
			<td>Tipo da Fruta</td>
			<td>Nome</td>
			<td>Quantidade</td>
			<td>Preço</td>
			<td>Ação </td>
		</tr>
		<tr>
			<?php // // abre o TD e abre o php, porque? php pode ser inserido dentro do html, então como temos que retornar o valor que foi preenchido no foreach em cima, devemos abrir o php e printar na tela o valor, onde o comando "echo" só é reconhecido dentro da linguagem php, nas tags de abertura do mesmo ?>
			<td> <?php echo $row['id_fruta']; ?></td> 
			<td> <?php echo $row['id_tipo_fruta']; ?></td>
			<td> <?php echo $row['nome'];?></td>
			<td> <?php echo $row['quantidade'];?></td>
			<td> <?php echo $row['preco'];?></td>
			<td> <?php echo "<button> <a href='editarfruta.php?id=".$row['id_fruta']."'> Editar </a> </button>" ?>
			 <?php echo "<button> <a href='deletarfruta.php?id=".$row['id_fruta']."'>Excluir </a> </button>" ?> </td>
		</tr>

    <?php } // final do foreach . Porque fechar chaves aqui? para o php identificar que o final do seu código é ate aqui, onde ele percorre toda linha ate chegar na tabela e imprimir os dados, como é um foreach ele repete esse loop ate "x" quantidade de linhas retornada no parametro sql 
?>
</table>
