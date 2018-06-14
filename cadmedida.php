<?php
$sigla = $_POST['sigla'];
$descricao = $_POST['descricao'];


			// Conecta com o Banco de Dados utilizando MYSQL PDO
			$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
			if (!empty($sigla && $descricao)){
				echo "Medida inserida com sucesso !";
			$conn->exec("INSERT INTO unimedida (sigla, descricao) VALUES ('$sigla', '$descricao')");
			}else {
				echo "Medida não foi inserida !";
			}
?>