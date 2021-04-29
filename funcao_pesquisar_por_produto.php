<?php 



//Faz conexão com o Banco de Dados.

require "db.php";

//Faz consulta no Banco de Dados.
	
$sql = "SELECT imageId, imageType, imageData, nome_prod FROM output_images ORDER BY imageId DESC";

	
$result = mysqli_query($conn, $sql);
	
//verifica se está sendo passado no URL a página atual, senão é atribuído a página.   
$pagina =(isset($_GET['pagina']))? $_GET['pagina'] : 1;

//Selecionar todos os produtos da tabela.
$result_prod = "SELECT * FROM output_images ORDER BY RAND()";
$resultado_produtos = mysqli_query($conn, $result_prod);
$row_prod = mysqli_fetch_assoc($resultado_produtos);

//Conta quantos produtos.
$total_produtos = mysqli_num_rows($resultado_produtos);

//Seta a quantidade de produtos por página.
$quantidade_pg = 25;

//Calcula o número necessário de páginas para apresentar os produtos.
$num_pagina = ceil($total_produtos/$quantidade_pg);

//Calcula o início da visualização.
$inicio = ($quantidade_pg*$pagina)-$quantidade_pg;

//Selecionar os produtos a serem apresentado na página.
$result_prod = "SELECT * FROM output_images limit $inicio, $quantidade_pg";
$resultado_produtos = mysqli_query($conn, $result_prod);
$total_produtos = mysqli_num_rows($resultado_produtos);

?>






<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">



<!-- Formatação da pagina -->
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.8.6/umd/popper.min.js" integrity="sha512-jbqFEuvOwSwKyG+POu/cFuLrOaMjIjYO4NVGzs2+h3fidvrLOQ7LLc1yf+LIKmm9SfEP+ZTpbLlu41jmILbRyw==" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
 
 

</head>


<body>
	
	<?php
	
	if($pagina != 0 || $quantidade_pg <= 20){
	
		$estilo_paginacao = "position:absolute; left:40px; top:750px; bottom:0px;";
		
	
	}else
		
		
	
		$estilo_paginacao = "position:absolute; left:40px; top:570px; bottom:0px;";
	
	
	?>
	
	<footer class="footer container-fluid" style="<?php echo $estilo_paginacao;?>">
	
	<!-- Apresentar Paginação-->
	
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			
			<li class="page-item">
			
				<?php
					
					$estilo_previous = "";
					if($pagina == 1)
					$estilo_previous = "disabled";
					$estilo2 = "display: none;";
				
				?>
				<li class="page-item <?php echo $estilo_previous; ?>" aria-current="page">
									
				<a class="page-link" style="<?php echo $estilo2;?>" href="listImages.php?pagina=1" aria-label="Previous">
							
					<span aria-hidden="true">&laquo; Previous</span>
				</a>
				
				</li>
			</li>
			
			
			<?php 
			
				
				for($i=1;$i<$num_pagina;$i++){
					$estilo = "";
					if($pagina == $i){
						$estilo = "active";
					}else
						$estilo = "disabled";
						
			?>
				<li  class="page-item <?php echo $estilo;?>" ><a  class="page-link" href="#"> <?php echo $i; ?></a>
				</li>
				<?php }	?>
				
				<li class="page-item">
				
					<?php
					
					
					
					//$total_pg = $num_pagina;
					$estilo_next = "";
					if($pagina == 1){
					$estilo_next = "disabled";
					}else
						$estilo_next = "active";
						$estilo2 = "display: none;";
						
						
						
					
					
					?>
				
					<li class="page-item <?php echo $estilo_next; ?>">
						<a class="page-link" style="<?php echo $estilo2;?>" href="listImages.php?pagina=<?php echo $pagina; ?>" aria-label="Next">
						
				
							<span aria-hidden="true">Next &raquo;</span>
						</a>
					</li>
					
				</li>	
				

			</ul>
		</nav>
		
		
	</footer>	
	
	

</body>
</html>	






















