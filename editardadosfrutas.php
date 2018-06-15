<?php
	$conn = new PDO('mysql:host=localhost;port=3306;dbname=mercado', 'root','');
	$id=$_POST['id'];
	$nomeFruta=$_POST['nomeFruta'];
	$quantidadeFruta=$_POST['quantidadeFruta'];
	$preco=$_POST['preco'];
	$tipoFruta=$_POST['tipoFruta'];
	if (!empty($nomeFruta && $quantidadeFruta && $preco && $tipoFruta)){
				echo "Registro foi alterado com sucesso !";
			$conn->query("UPDATE frutas
						SET nome='$nomeFruta', quantidade='$quantidadeFruta', preco='$preco', id_tipo_fruta='$tipoFruta'
						WHERE id_fruta=$id");
			} else {
				echo "O registro não foi alterado, verifice se os campos estão vazios!";
			}



?>