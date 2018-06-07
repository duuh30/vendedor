<?php
		// Recebe os dados do formulário de cadastro.
			$nomeFruta = $_POST['nomeFruta'];
			$quantidadeFruta = $_POST['quantidadeFruta'];
			$precoFruta = $_POST['precoFruta'];
			$tipoFruta = $_POST['tipoFruta'];
	// Conecta com o Banco de Dados utilizando MYSQL PDO
			$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
	// Insere na tabela os dados recebidos do Formulário. 
			$conn->exec("INSERT INTO frutas (nome, quantidade, preco, tipoFruta) VALUES ('$nomeFruta', $quantidadeFruta, $precoFruta, '$tipoFruta')");	



?>
