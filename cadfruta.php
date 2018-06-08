<?php
		// Recebe os dados do formulário de cadastro.
			$nomeFruta = $_POST['nomeFruta'];
			$quantidadeFruta = $_POST['quantidadeFruta'];
			$precoFruta = $_POST['precoFruta'];
			$tipoFruta = $_POST['tipoFruta'];
			$medida = $_POST['unidade'];
	// Conecta com o Banco de Dados utilizando MYSQL PDO
			$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
					$conn->exec("INSERT INTO frutas (nome, quantidade, preco, tipoFruta, medida) VALUES ('$nomeFruta', $quantidadeFruta, $precoFruta, '$tipoFruta', '$medida')");

				



?>
