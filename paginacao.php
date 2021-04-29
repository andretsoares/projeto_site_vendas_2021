<?php 



//Faz conexão com o Banco de Dados.

require "db.php";

//Adiciona função de consultar por produtos e quantifica por página.

require_once "funcao_consulta.php";




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
	
	if($pagina != 1 && $quantidade_pg <= 25){
	
		
		$estilo_paginacao = "position:absolute; left:40px; top:770px; bottom:0px;";
	
	}else
		
		
	
		$estilo_paginacao = "position:absolute; left:40px; top:1700px; bottom:0px;";
	
	
	?>
	
	<footer class="footer container-fluid" style="<?php echo $estilo_paginacao; ?>">
	
	<!-- Apresentar Paginação-->
	
	<nav aria-label="Page navigation example">
		<ul class="pagination justify-content-center">
			
			<li class="page-item">
			
				<?php
					
					$estilo_previous = "";
					if($pagina == 1){
					$estilo_next = "disabled";
					$estilo2 = "display: none;";
					}else
						$estilo2 = "active";
					
				
				?>
				<li class="page-item <?php echo $estilo_previous; ?>" aria-current="page">
									
				<a class="page-link" style="<?php echo $estilo2;?>" href="listImages.php?pagina=<?php echo $pagina-1; ?>" aria-label="Previous">
							
					<span aria-hidden="true">&laquo; Previous</span>
				</a>
				
				</li>
			</li>
			
			
			<?php 
				for($i=0;$i<$num_pagina;$i++){
					$estilo = "";
					if($pagina == $i + 1)
						$estilo = "active";
					
			?>
				<li  class="page-item  <?php echo $estilo; ?>"><a class="page-link" href="listImages.php?pagina=<?php echo $i+1; ?>"> <?php echo $i+1; ?></a>
				</li>
				<?php } ?>
				
				<li class="page-item">
				
					<?php
					
					
					
					$total_pg = $num_pagina;
					$estilo_next = "";
					if($pagina == $total_pg){
					$estilo_next = "disabled";
					$estilo2 = "display: none;";
					}else
						$estilo2 = "active";
					
					?>
				
					<li class="page-item <?php echo $estilo_next; ?>">
						<a class="page-link" style="<?php echo $estilo2;?>" href="listImages.php?pagina=<?php echo $pagina+1; ?>" aria-label="Next">
						
				
							<span aria-hidden="true">Next &raquo;</span>
						</a>
					</li>
					
				</li>	
				

			</ul>
		</nav>
		
		
	</footer>	
	
	

</body>
</html>	






















