
var a0 ="<div class='area'></div><nav class='main-menu'><ul><li><a href='#' /><i class='fa fa-home fa-2x'></i><i class='material-icons' style='font-size:24px'></i><span class='nav-text'></span>Home</a></li>";
var a1 ="<div class='area'></div><nav class='main-menu'>";
var a2 ="<ul>";
var a3 ="<li>";
var a4 ="<a href='#' />";
var a5 ="<i class='fa fa-home fa-2x'></i>";
var a6 ="<i class='material-icons' style='font-size:24px'></i>"; 
var a7 ="<span class='nav-text'>";
var a8 ="</span>";
var a9 ="Home";
var a10="</a>";
var a11="</li>";
var a12="<p>Texto 123 aqui</p>";

var teste =a1+a2+a3+a4+a5+a6+a7+a8+a9+a10+a11;





function f1() {
  document.getElementById("body").innerHTML = teste;
}

function f2() {
  document.getElementById("body").innerHTML = a2;
}

function f3() {
  document.getElementById("body").innerHTML = a3;
}

function f4() {
  document.getElementById("body").innerHTML = a4;
}

function f5() {
  document.getElementById("body").innerHTML = a5;
}

function f6() {
  document.getElementById("body").innerHTML = a6;
}

function f7() {
  document.getElementById("body").innerHTML = a7;
}

function f8() {
  document.getElementById("body").innerHTML = a8;
}

function f9() {
  document.getElementById("body").innerHTML = a9;
}

function f10() {
  document.getElementById("body").innerHTML = a10;
}

function f11() {
  document.getElementById("body").innerHTML = a11;
}

var bd=teste;


function pagina1(){
	
	
	document.getElementById("demo").innerHTML = a1+'<br>'+a2+'<br>'+a3+a4+a5+a6;
	
}                
                    
//#######################################################Bloqueia copia de código##############################################################################                       
                         
	function mensagem(){

	//alert('conteudo bloqueado');
	return false;

}

function bloqueiaCopia(Event){

	var Event = Event ? Event: window.event;
	var tecla = (Event.keycode) ? Event.keycode : Event.which;
	
	if(tecla == 17){
	
		mensagem();
	
	
	}
	if(tecla == 123){
	
		mensagem();
	
	}



}
	document.onkeypress = bloqueiaCopia;
	document.onkeydown = bloqueiaCopia;
	document.oncontextmenu = mensagem;								
			 

                        