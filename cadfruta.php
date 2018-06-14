<?php
		// Conecta com o Banco de Dados utilizando MYSQL PDO
			$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
		// Recebe os dados do formulário de cadastro.
			$nomeFruta = $_POST['nomeFruta'];
			$quantidadeFruta = $_POST['quantidadeFruta'];
			$precoFruta = $_POST['precoFruta'];
			$tipoFruta = $_POST['tipoFruta'];
			if (!empty($nomeFruta && $quantidadeFruta && $precoFruta && $tipoFruta)){
				echo 'Cadastro Realizado com sucesso !';
				$conn->exec("INSERT INTO frutas (nome, quantidade, preco, id_tipo_fruta) VALUES ('$nomeFruta', $quantidadeFruta, $precoFruta, '$tipoFruta')");
			} else {
				echo 'Todos os campos são obrigatórios !';
			}
?>
