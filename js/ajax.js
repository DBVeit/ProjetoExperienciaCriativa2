$(document).ready(function(){

	fLocalEventosClick();

});


function fLocalEventosClick(){

	$("#bGravar").click(function(){

		fLocalComunicaServidor('form', 'insere-usuario');
		return false;
	});


	
}


function fLocalComunicaServidor(formulario, file){

	var dados = $("form").serialize();

	$.ajax({
		type: "POST",
		dataType: "json",
		url: "php/"+file+".php",
		data: dados,
		success:function(array){

			
		}
	});
}
