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
	
require_once "paginacao.php";

//Adiciona o corpo do Body.

require_once "corpo_body.php";





?>
