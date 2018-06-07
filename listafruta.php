<?php
		// Conecta com o Banco de Dados utilizando MYSQL PDO
			$conn = new PDO('mysql:host=localhost;dbname=mercado', 'root','');
		echo "<p>Frutas Listadas !</p>";
		// Parametro SQL para listar as frutas pelas colunas TIPO e NOME em ordem
			$pesquisa = $conn->query("SELECT tipoFruta, nome FROM frutas ORDER BY tipoFruta, nome");

			if($pesquisa){
				foreach ($pesquisa as $row) { 
					echo $row['tipoFruta'].'-'.$row['nome'].'<br>'; // Aqui o foreach vai no número da linha de retorno SQL e imprimi os valores tipo e nome
		}
	}
		
	
?>

