<?php
		
	$altura = "180";
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
				imagecopyresampled($imagem_redimensionada, $imagem_temporaria, 0, 0, 0, 0, $nova_largura, 
				$nova_altura, $largura_original, $altura_original);	
				
				imagejpeg($imagem_redimensionada, 'arquivo/' .$_FILES['arquivo']['name']);
				
				echo "<img src='arquivo/".$_FILES['arquivo']['name']."'><br>";
						
				
			break;
			
	endswitch;		
	
	
	$_POST['nome_prod'];


if(isset($_POST['nome_prod'])){
	
	echo "Enviando o arquivo...";
	
	echo "<img src='preloader.gif'; style='position:relative; left:500px; top: 50px; height:50px;';/>";
	
	header("Refresh: 2;url=redimensiona.php"); 
	
}else {
	
	echo "Erro ao enviar arquivo.";
	
}

?>