$(document).ready(function(){
	
	fLocalEventosClick();

	//hashPass();

});


function fLocalEventosClick(){

	$("#bGravar").click(function(){

		var registro = $("#cadastro")[0].checkValidity();

		if(registro){
			hashPass();
			fLocalComunicaServidor('form', '../php/functions/cadastra-usuario.php');
		}else{
			$("#cadastro")[0].reportValidity()
			return false;
		}
		
	});
	
	$("#bLogar").click(function(){

		var login = $("#login")[0].checkValidity();

		if(login){
			hashPass();
			fLocalComunicaServidor('form', 'php/functions/autentica-usuario.php');
		}else{
			$("#login")[0].reportValidity()
			return false;
		}
	});	
}


function fLocalComunicaServidor(formulario, file){

	var dados = $("form").serialize();


	$.ajax({
		type: "POST",
		dataType: "json",
		url: ""+file+"",
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

			if(array["function"] == "autentica-usuario"){

				var conteudo_tabela = "";	

				if(array["status"] == "n"){

					conteudo_tabela += "<tr>";
					conteudo_tabela += "<td>" + array["message"]+"</td>";
					conteudo_tabela += "</tr>";

					$("#returnMessage").html(conteudo_tabela);

				}else if(array["status"] == "y"){

					conteudo_tabela += "<tr>";
					conteudo_tabela += "<td>" + array["message"]+"</td>";
					conteudo_tabela += "</tr>";

					$("#returnMessage").html(conteudo_tabela);

					window.location.href = '../../pages/main.php';
					
				}else if (array["status"] == "u"){

					conteudo_tabela += "<tr>";
					conteudo_tabela += "<td>" + array["message"]+"</td>";
					conteudo_tabela += "</tr>";

					$("#returnMessage").html(conteudo_tabela);
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




