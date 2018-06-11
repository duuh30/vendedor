<?php
		// Conecta com o Banco de Dados utilizando MYSQL PDO
			$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
		// Recebe os dados do formulário de cadastro.
			$nomeFruta = $_POST['nomeFruta'];
			$quantidadeFruta = $_POST['quantidadeFruta'];
			$precoFruta = $_POST['precoFruta'];
			$tipoFruta = $_POST['tipoFruta'];
			$medida = $_POST['unidade'];
			$peso = $_POST['peso'];
			if (!empty($nomeFruta && $quantidadeFruta && $precoFruta && $tipoFruta && $medida && $peso)){
				echo 'Cadastro Realizado com sucesso !';
				$conn->exec("INSERT INTO frutas (nome, quantidade, preco, tipoFruta, medida, peso) VALUES ('$nomeFruta', $quantidadeFruta, $precoFruta, '$tipoFruta', '$medida', $peso)");
			} else {
				echo 'Todos os campos são obrigatórios !';
			}
?>
