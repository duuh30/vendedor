<?php

	$descricao = $_POST['descricao'];
	$unidade = $_POST['unidadeMedida'];


			// Conecta com o Banco de Dados utilizando MYSQL PDO
			$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
			// Insere na tabela os dados recebidos do Formulário. 
			if (!empty($descricao && $unidade)){
				echo "Tipo inserido com sucesso !";
			$conn->exec("INSERT INTO tipo_fruta (descricao, unidade_medida) VALUES ('$descricao', $unidade)");	
			} else {
				echo "Tipo não foi inserido !";
			}

?>