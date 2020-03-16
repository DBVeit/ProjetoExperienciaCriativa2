$(document).ready(function(){

	validate();	

	fLocalEventosClick();

	hashPass();

});


function fLocalEventosClick(){

	$("#bGravar").click(function(){


		hashPass();
		fLocalComunicaServidor('form', 'cadastra-usuario');
		return false;
	});
	
	$("#bLogar").click(function(){
		fLocalComunicaServidor('form', 'autentica-usuario');
		
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

			if(array["function"] == "cadastra-usuario"){

				var conteudo_tabela = "";	

				if(array["status"] == "n"){

					document.getElementById('email').value = '';	

					conteudo_tabela += "<tr>";
					conteudo_tabela += "<td>" + array["message"]+"</td>";
					conteudo_tabela += "</tr>";

					$("#returnMessage").html(conteudo_tabela);

				}else if(array["status"] == "y"){

					conteudo_tabela += "<tr>";
					conteudo_tabela += "<td>" + array["message"]+"</td>";
					conteudo_tabela += "</tr>";

					$("#returnMessage").html(conteudo_tabela);

					window.location.href = '../php/functions/verificacao-email.php';
				}
			}	
		}
	});
}

function hashPass(){

	document.getElementById("pass-hash").value = "";
	var password = document.getElementById('password').value;
	document.getElementById("password").value = "";    
	password = $.MD5(password);
	document.getElementById("pass-hash").value = password;

	
}

function validate(){
	$("#bGravar").click(function () {

		if ($("#cadastro")[0].checkValidity())
			alert('sucess');
		else
			//Validate Form
			$("#cadastro")[0].reportValidity()
		});
}


