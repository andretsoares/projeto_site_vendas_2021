<?php

require_once "db.php";


//Recebe via POST dados do campo nome do Produto.
$_POST['nome_prod'];


if(isset($_POST['nome_prod'])){
	
	echo "Enviando o arquivo.";
	
	echo "<img src='preloader.gif'; style='position:relative; left:500px; top: 300px; height:50px;';/>";
	
	header("Refresh: 1;url=cadastro_de_produtos.php"); 
	
}else {
	
	echo "Erro ao enviar arquivo.";
	
}


//Insere arquivos de imagem e seu nome no Banco de Dados.

if(count($_FILES) > 0) {
	if(is_uploaded_file($_FILES['arquivo']['tmp_name'])) {
		
		$imgData =addslashes(file_get_contents($_FILES['arquivo']['tmp_name']));
		$imageProperties = getimageSize($_FILES['arquivo']['tmp_name']);
		
		$extensao = strtolower(substr($_FILES['arquivo']['tmp_name'], -4));
		$novo_nome = md5(time());
		
		
		
		
		
		$nome_prod = $_POST['nome_prod'];
		$valor_prod = $_POST['valor_prod'];
		$class_prod = $_POST['class_prod'];
			
			$sql = "INSERT INTO output_images(imageData, nome_arquivo, data, nome_prod, valor_prod, class_prod, cod_prod, qr_prod)
			VALUES('{$imgData}', '$novo_nome', NOW(), '$nome_prod', '$valor_prod', '$class_prod', 'null', 'null')";
			$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
			
			$ultimo_id = mysqli_insert_id($conn);
			
			//echo $ultimo_id;
			
	
					
		
	}

}  


			
			
			
//FIM


?>