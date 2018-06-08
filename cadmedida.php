<?php
$grandeza = $_POST['grandeza'];
$nome = $_POST['nome_unidade'];
$simbolo = $_POST['simbolo'];


			// Conecta com o Banco de Dados utilizando MYSQL PDO
			$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
			$conn->exec("INSERT INTO unimedida (grandeza, nome_unidade, Simbolo) VALUES ('$grandeza', '$nome', '$simbolo')");
?>