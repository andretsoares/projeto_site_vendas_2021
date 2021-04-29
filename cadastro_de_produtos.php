<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

<Title>Cadastro de Produtos</title>

<!-- Jquery -->
	
	
<!-- Última versão CSS compilada e minificada -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

<!-- Tema opcional -->
	<link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.min.css">
	
<!-- Jquery -->
	<link rel="stylesheet" href="/jquery/jquery.min.js">

<!-- Última versão JavaScript compilada e minificada -->
	<script src="/bootstrap/js/bootstrap.min.js"></script>


</head>


<body>
<div class="container theme-showcase" role="main">
	<div class="page-header">
		<div class="row">
			<div class="col-sm-6 col-md-6">
				<h1>Cadastro de Produtos</h1>
			</div>
	<div class="col-sm-6 col-md-6">	
		
	</div>
		</div>
	</div>
					
					<div>
					<form name="frmImage" enctype="multipart/form-data" action="add_produto.php" method="post" class="frmImageUpload">
					
					<label>Nome do Produto:</label><br/>
					<input name="nome_prod" type="text"  class="inputFile" /><br/>
					<label>Valor do Produto:</label><br/>
					<input name="valor_prod" type="text" class="inputFile" /><br/>
					<label>Classificação:</label><br/>
					<input name="class_prod" type="text" class="inputFile" /><br/>
					<label>Salvar Imagem de Produto:</label><br/>
					<input name="arquivo" type="file"  class="inputFile" />
					<input type="submit" value="Salvar" class="btnSubmit"/> 
					
					</form>
					</div>
					
					
</div>
</body>
</html>




