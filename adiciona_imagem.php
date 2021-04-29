<?php

/*require_once "db.php";


	$altura = "242";
	$largura = "200";
	
	echo "Altura pretendida: $altura - largura pretendida: $largura <br>";
	
	switch($_FILES['arquivo']['type']):
			
			case 'image/jpeg';
			case 'image/pjpeg';
				
				$imagem_temporaria = imagecreatefromjpeg($_FILES['arquivo']['tmp_name']);
				
				$largura_original = imagesx($imagem_temporaria);
				
				$altura_original  = imagesy($imagem_temporaria);
				
				echo "largura original: $largura_original - altura original: $altura_original <br>";
				
				$nova_largura = $largura ? $largura : floor (($altura_original / $lartura_original) * $largura);
				
				$nova_altura = $altura ? $altura : floor (($altura_original / $largura_original) * $largura);
				
				$imagem_redimensionada = imagecreatetruecolor($nova_largura, $nova_altura);
				
				imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, $nova_altura, $largura_original, $altura_original);	
				
				imagejpeg($imagem_redimensionada, 'arquivo/' .$_FILES['arquivo']['name']);
				
				$teste = imagejpeg($imagem_redimensionada, 'arquivo/' .$_FILES['arquivo']['name']);
				
				echo "<img src='arquivo/".$_FILES['arquivo']['name']."'>";				
				
			break;
			
	endswitch;		
	

//Insere arquivos de imagem e seu nome no Banco de Dados.

if(count($_FILES) > 0) {
	if(is_uploaded_file($_FILES['arquivo']['tmp_name'])) {
		
		$imgData =addslashes(file_get_contents($_FILES['arquivo']['tmp_name']));
		$imageProperties = getimageSize($_FILES['arquivo']['tmp_name']);
		
		$extensao = strtolower(substr($_FILES['arquivo']['tmp_name'], -4));
		$novo_nome = md5(time());
		
		
		
			
			$sql = "INSERT INTO output_images(imageType ,imageData, nome_arquivo, data, nome_prod)
			VALUES('{$imageProperties['mime']}', '{$imgData}', '$novo_nome', NOW(), '$nome_prod')";
			$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
				if(isset($current_id)) {
				header("Location: listImages.php");


				}
			
		
		
	}

}  
*/
//FIM

?>
 <HTML>
<HEAD>
<TITLE>Upload Image to MySQL BLOB</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>


<form name="frmImage" enctype="multipart/form-data" action="" method="post" class="frmImageUpload">
<label>Upload Image File:</label><br/>
<input name="arquivo" type="file" multiple="multiple" class="inputFile" />
<input name="nome_prod" type="text" class="inputFile" placeholder="nome produto"/>
<input type="submit" value="Submit" class="btnSubmit"/>


</form>
</div>
</BODY>
</HTML>




