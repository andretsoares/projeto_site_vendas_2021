<?php


//Faz conexão com o Banco de Dados.

require "db.php";

//Adicona cabeçalho fixo da página.
require_once "cabecalho.php";

//Adiciona funções de pesquisas dos produtos.
require_once "funcao_consulta.php";

//Adiciona gerador de QRCode.

require_once "qrcode.php";

//Adicona função de paginação.
	
require_once "funcao_pesquisar_por_produto.php";

//Recebe via GET dados do campo pesquisar.
$valor_pesquisar = $_GET['pesquisar'];

//verifica se está sendo passado no URL a página atual, senão é atribuído a página.     
$pagina =(isset($_GET['pagina']))? $_GET['pagina'] : 1;
if(!isset($_GET['pesquisar'])){
	
	header("Location: listImages.php");
	
}else {
	
	$valor_pesquisar = $_GET['pesquisar'];
	
	
}

//Faz consulta no banco de dados através da variável recebida por GET.
	
$sql = "SELECT nome_prod FROM output_images WHERE nome_prod='$valor_pesquisar'";
	
$result = mysqli_query($conn, $sql);

//Selecionar todos os produtos da tabela.

$resultado_produtos = mysqli_query($conn, $sql);

//Conta quantos produtos.
$total_produtos = mysqli_num_rows($resultado_produtos);	

//Seta a quantidade de produtos por página.
$quantidade_pg = 10;

//Calcula o número necessário de páginas para apresentar os produtos.
$num_pagina = ceil($total_produtos/$quantidade_pg);

//Calcula o início da visualização.
$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;
	
//Selecionar todos os produtos da tabela.
$result_prod = "SELECT * FROM output_images WHERE nome_prod LIKE '%$valor_pesquisar%' limit $inicio, $quantidade_pg";
$resultado_produtos = mysqli_query($conn, $result_prod);

//Conta quantos produtos.
$total_produtos = mysqli_num_rows($resultado_produtos);

//Selecionar os produtos a serem apresentado na página.
$result_prod = "SELECT * FROM output_images WHERE nome_prod LIKE '%$valor_pesquisar%' limit $inicio, $quantidade_pg";
$resultado_produtos = mysqli_query($conn, $result_prod);
$total_produtos = mysqli_num_rows($resultado_produtos);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.8.6/umd/popper.min.js" integrity="sha512-jbqFEuvOwSwKyG+POu/cFuLrOaMjIjYO4NVGzs2+h3fidvrLOQ7LLc1yf+LIKmm9SfEP+ZTpbLlu41jmILbRyw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="estilo.css" type="text/css"> 

<script src="javascript.js"type="text/javascript"></script> 
 
 
</head>
<body>


<?php
	
	if($pagina >= 1 || $quantidade_pg <= 25){
	
		$estilo_paginacao = "position:absolute; left:40px; top:1700px; bottom:0px;";
		
	
	}else
		
		
	
		$estilo_paginacao = "position:absolute; left:40px; top:570px; bottom:0px;";
	
	
	?>


<div class="container">
 
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-dialog-centered">
      <div id="modal" class="modal-content">
      
       
       
        <div class="modal-body">
          <h2 class="modal-title"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CUPOM PROMOCIONAL</b></h2>
		  <h4><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONSULTE SEU DESCONTO</b></h4>
		  
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="<?php echo $aux2; ?>" />
			
			<p id="cliqueforaparasair"><b>Clique fora para sair</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<img src="setas-flechas.png" id="img_cliqueforaparasair"/></p>
        </div>
        
       
        
      </div>
    </div>
  </div>



	
<div class="container-fluid row row-cols-5">
	
		
		<?php while($row_prod = mysqli_fetch_assoc($resultado_produtos)){?>
			<div class="col row-cols-sm-2">
				<div class="thumbnail">			  

		
		<div class="caption text-center inner">
			<a href="listImages.php?nome_prod=<?php echo $row_prod['imageId']; ?>">
				<h6 id="nome_prod"><b><?php echo $row_prod['nome_prod']; ?></b></h6><br>
					<?php echo '<img  id="img_prod" src="data:image/jpeg;base64,' .base64_encode($row_prod['imageData']). '"/>';?>	
				<br>		
				<label id="valor"><b>R$:&nbsp;</b><b><?php echo $row_prod['valor_prod']; ?></b></label><br>
				<p><a id="comprar" href="#" class="btn btn-primary" role="button">Comprar</a></p>
			</a> 
				
			
				<div>
				
				<img id="qrcode" src="<?php echo $aux; ?>" />
				</div>
		
		</div>
				</div>
			</div>
				<?php } ?>
		
		
		
	</div>



<a class="btn btn-primary" role="button" id="subirTopo"><img id="img_subirtopo" src="chevron-up.svg" /></a>




</body>

</html>


