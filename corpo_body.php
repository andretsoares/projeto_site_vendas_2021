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






<style>

 #sacola{
 
 width:30px;
 height:30px;
 position:relative;
 left:30px;
 top:-10px;
 
 }
 
 #sacola1:hover{
	 
	 
	 opacity:0.2;
	 -ms-transform: scale(1.2); /* IE 9 */
	 -webkit-transform: scale(1.2); /* Safari 3-8 */
	 transform: scale(1.2); 
	 
 }
 
 
.tooltip2 {
  position: relative;
  display: inline-block;
  border-bottom: 1px dotted black;
  top:60px;
}

.tooltip2 .tooltiptext2 {
  visibility: hidden;
  width: 200px;
  height:30px;
  top:-60px;
  background-color: #eb423f;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 5px 0;
  position: absolute;
  z-index: 1;
  bottom: 150%;
  left: 50%;
  margin-left: -60px;
}

.tooltip2 .tooltiptext2::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #0d6efd transparent transparent transparent;
}

.tooltip2:hover .tooltiptext2 {
  visibility: visible;
}

</style>
	

</head>


<body>

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

		
		
		
 


		
		
		<div class="caption text-center inner ">
			
			<a href="#" class="tooltip2"><img id="sacola" src="sacolas-de-compras.png">
				<span class="tooltiptext2">+ Adiciona na sacola</span>
			</a>	
			
			<a href="listImages.php?nome_prod=<?php echo $row_prod['imageId']; ?>">
				<h6 id="nome_prod"><b><?php echo $row_prod['nome_prod']; ?></b></h6><br>
						
					
									
						
						
					<?php echo '<img  id="img_prod" src="data:image/jpeg;base64,' .base64_encode($row_prod['imageData']). '"/>';?>	
				<br>		
				<label id="valor"><b>R$:&nbsp;</b><b><?php echo $row_prod['valor_prod']; ?></b></label><br>
				<a id="comprar" href="#" class="btn btn-primary" role="button">Comprar</a>
			</a>
				
			
				<div><br>
				
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