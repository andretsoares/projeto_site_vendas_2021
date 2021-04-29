<?php




require_once "db.php";

//Recebe imagem e insere com seu nome no Banco de Dados.

if(count($_FILES) > 0) {
	if(is_uploaded_file($_FILES['userImage']['tmp_name'])) {
		
		$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
		$imageProperties = getimageSize($_FILES['userImage']['tmp_name']);
		
		$extensao = strtolower(substr($_FILES['userImage']['tmp_name'], -4));
		$novo_nome = md5(time());
		
		
		
			
			$sql = "INSERT INTO output_images(imageType ,imageData, nome_arquivo, data, nome_prod)
			VALUES('{$imageProperties['mime']}', '{$imgData}', '$novo_nome', NOW(), '$nome_prod')";
			$current_id = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_error($conn));
				if(isset($current_id)) {
				header("Location: listImages.php");


				}
			
		
		
	}

}  

//FIM 







?>
<HTML>
<HEAD>
<TITLE>Upload Image to MySQL BLOB</TITLE>
<link href="imageStyles.css" rel="stylesheet" type="text/css" />
</HEAD>
<BODY>



<form enctype="multipart/form-data" action="redimensiona.php" method="POST">
<label>Upload Image File:</label><br/>
<input name="arquivo" type="file" class="inputFile" multiple="multiple"/>
<input name="nome_prod" type="text" class="inputFile" placeholder="nome produto"/> 
<input type="submit" value="Submit" class="btnSubmit"/>


</form>
</div>
</BODY>
</HTML>







