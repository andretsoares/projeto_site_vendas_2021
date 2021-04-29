<?php


//Faz consulta no Banco de Dados.
	
$sql = "SELECT imageId, imageType, imageData, nome_prod FROM output_images ORDER BY imageId DESC";

	
$result = mysqli_query($conn, $sql);
	
//verifica se está sendo passado no URL a página atual, senão é atribuído a página.   
$pagina =(isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos os produtos da tabela.
$result_prod = "SELECT * FROM output_images";
$resultado_produtos = mysqli_query($conn, $result_prod);
$row_prod = mysqli_fetch_assoc($resultado_produtos);

//Conta quantos produtos.
$total_produtos = mysqli_num_rows($resultado_produtos);

//Seta a quantidade de produtos por página.
$quantidade_pg = 20;

//Calcula o número necessário de páginas para apresentar os produtos.
$num_pagina = ceil($total_produtos/$quantidade_pg);

//Calcula o início da visualização.
$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os produtos a serem apresentado na página.
$result_prod = "SELECT * FROM output_images ORDER BY RAND() limit $inicio, $quantidade_pg ";

//$result_prod = "SELECT * FROM `output_images` ORDER BY RAND()"; 
$resultado_produtos = mysqli_query($conn, $result_prod);
$total_produtos = mysqli_num_rows($resultado_produtos);
















	
?>	