<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">

	<link href="estilo.css" rel="stylesheet" type="text/css" /> 
	
	
	
	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


<style>

 #sacolas-de-compras{
 
 width:40px;
 height:40px;
 position:relative;
 left:-10px;
 top:0px;
 
 }
 
 #sacolas-de-compras:hover{
	 
	 
	 opacity:0.2;
	 -ms-transform: scale(1.2); /* IE 9 */
	 -webkit-transform: scale(1.2); /* Safari 3-8 */
	 transform: scale(1.2); 
	 
 }
 
 {

	margin:0;
	padding:0;
	

}

p{
	color:#fff;
	position:relative;
	left:-5px;
	top:10px;
	
}

#div3 {
  width: 90px;
  height: 20px;
  left:-40px;
  background-color: #0d6efd;
  font-weight: bold;
  color:white;
  position: relative;
  animation: mymove1 0.2s infinite;
  animation-direction: alternate-reverse;
}

#div3 {animation-timing-function: ease-in;}

@keyframes mymove1 {
  from {left: 0px;}
  to {left: 30px;}
}



</style>

</head>


<body>

<nav id="cabecalho" class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><h3>Loja</h3></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/listImages.php">Home</a>
        </li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Livros</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Camisetas</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Canecas</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Bonés</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="#">Fale conosco</a>
			</li>

      </ul>
	
	  
	  
      <a href="" class="nav-link">
	  
	  </a>
	  <a href="teste-menu-lateral-esquerda.php" class="nav-item">
	  <p>Ir para a sacola</p>
	  </a>
	  <div id="div3">&gt;&gt;&gt;&gt;</div>
	  
	  
	  <form class="d-flex" method="GET" action="pesquisar.php">
		
		<a href="teste-menu-lateral-esquerda.php"><img id="sacolas-de-compras" src="sacolas-de-compras.png">
		
		
			
		</a>
		
		
		
		
        <input class="form-control me-2" name="pesquisar" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




</body>
</html>	