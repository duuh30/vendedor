<?php

	$nome_tipo = $_POST['nomeTipo'];
	$unidade_Medida = $_POST['unidadeMedida'];
	$peso = $_POST['Peso'];


			// Conecta com o Banco de Dados utilizando MYSQL PDO
			$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
			// Insere na tabela os dados recebidos do Formulário. 
			$conn->exec("INSERT INTO tipo_fruta (nome_tipo, unidade_medida, peso) VALUES ('$nome_tipo', '$unidade_Medida', $peso)");	


?>