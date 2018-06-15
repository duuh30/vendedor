<?php
$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
$id = filter_input(INPUT_GET, 'id');
	
	$conn->query("DELETE FROM frutas WHERE id_fruta=$id");
	echo "Produto Deletado com sucesso !";
	echo "<p>Redirecionando para Menu Principal em 5segundos</p>";
	echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=index.php'>";

?>