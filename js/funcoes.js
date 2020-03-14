$(document).ready(function(){

	$("#cadastro").submit(function(){
		hashPass();	 
	})

	fLocalEventosClick();

});




function fLocalEventosClick(){

	$("#bGravar").click(function(){
		fLocalComunicaServidor('form', 'cadastra-usuario');
		//alert("");
		//return false;
	});
	
	$("#bLogar").click(function(){
		fLocalComunicaServidor('form', 'autentica-usuario');
		//alert("");
		//return false;
	});	
}


function fLocalComunicaServidor(formulario, file){

	var dados = $("form").serialize();

	$.ajax({
		type: "POST",
		dataType: "json",
		url: "../php/functions/"+file+".php",
		data: dados,
		success:function(array){

			echo("works");
		}
	});
}

function hashPass(){
	var password = document.getElementById('password').value;
	password = $.MD5(password);
	document.getElementById("password").value = "";    
	document.getElementById("pass-hash").value = password;
}
