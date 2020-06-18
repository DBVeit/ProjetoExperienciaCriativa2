$(document).ready(function(){
	
	//passConfirmation();
	fLocalEventosClick();

	
	if($('body').is('.displayMovie')){

		fLocalDisplay();
	}

	if($('body').is('.displayFav')){
		fLocalDisplayFav();
	}

	if($('body').is('.displayMovieRecent')){
		fLocalDisplayRecent();
	}
	  
	  
	//hashPass();

});

function fLocalDisplay(){
	//alert("listar"); // alert para saber se está sendo chamado

    $.ajax({

		//type: "POST",
		dataType: "json",
		url: "../php/functions/lista-filmes.php",
		//data: dados,
        success: function (array) {
			
			var conteudo_tabela = "";
			var tipo = 1;
			var tipo = 0;

			console.log(array["filme"].length);
			console.log(array["filme"]);
	

				for(var i = 0; i < array["filme"].length; i++){
				
					conteudo_tabela += "<tr>";

					if(array["filme"][0]["auth"] == "usuario"){
						conteudo_tabela += "<td>" + array["filme"][i]["link"] + "</td>";
					}else{
						conteudo_tabela += "<td>" + array["filme"][i]["thumb"] + "</td>";
					}


					if(array["filme"][0]["auth"] == "usuario"){
						conteudo_tabela += "<td>" + array["filme"][i]["titulo"] + "<br>" + array["filme"][i]["info"] + "<br>" + array["filme"][i]["year"] + "<br> <label> <input type='checkbox' id='" + array["filme"][i]["id"] + "' value='" + array["filme"][i]["id"] +"' name='filmes' /> <span> Favorito </span> </label> </td>";
					}else{
						conteudo_tabela += "<td>" + array["filme"][i]["titulo"] + "<br>" + array["filme"][i]["info"] + "<br>" + array["filme"][i]["year"] + "<br>" + array["filme"][i]["id"] +"</td>";
					}
					
					conteudo_tabela += "</tr>";
	
				}
	
				$("#returnMessage").html(conteudo_tabela);	
			
	

		}

    }); 

}

function fLocalDisplayFav(){
	alert("listar"); // alert para saber se está sendo chamado

    $.ajax({

		//type: "POST",
		dataType: "json",
		url: "../php/functions/lista-favoritos.php",
		//data: dados,
        success: function (array) {
			
			var conteudo_tabela = "";

			console.log(array["filme"].length);
			console.log(array["filme"]);


			for(var i = 0; i < array["filme"].length; i++){
				
				
				conteudo_tabela += "<tr>";
				conteudo_tabela += "<td>" + array["filme"][i]["link"] + "</td>";
				conteudo_tabela += "<td>" + array["filme"][i]["titulo"] + "<br>" + array["filme"][i]["info"] + "<br><label><input type='checkbox' id='"+ array["filme"][i]["id"] + "' value='"+ array["filme"][i]["id"] +"' name='filmes' /><span>Favorito</span></label></td>";
				//conteudo_tabela += "<td>" + array["filme"][i]["info"] + "</td>";	
				conteudo_tabela += "</tr>";


				 /*<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  				<label for="vehicle1"> I have a bike</label><br></br>*/

				  /*<label>
				  <input type="checkbox" />
				  <span>Red</span>
				</label>*/
				
				
			}

            $("#returnMessage").html(conteudo_tabela);
        }
    }); 

}

function fLocalDisplayRecent(){
	//alert("listar"); // alert para saber se está sendo chamado

    $.ajax({

		//type: "POST",
		dataType: "json",
		url: "../php/functions/lista-recentes.php",
		//data: dados,
        success: function (array) {
			
			var conteudo_tabela = "";

			console.log(array["filme"].length);
			console.log(array["filme"]);


			for(var i = 0; i < array["filme"].length; i++){
				
				
				conteudo_tabela += "<tr>";
				conteudo_tabela += "<td>" + array["filme"][i]["link"] + "</td>";
				conteudo_tabela += "<td>" + array["filme"][i]["titulo"] + "<br>" + array["filme"][i]["info"] + "<br><label><input type='checkbox' id='"+ array["filme"][i]["id"] + "' value='"+ array["filme"][i]["id"] +"' name='filmes' /><span>Favorito</span></label></td>";
				//conteudo_tabela += "<td>" + array["filme"][i]["info"] + "</td>";	
				conteudo_tabela += "</tr>";


				 /*<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  				<label for="vehicle1"> I have a bike</label><br></br>*/

				  /*<label>
				  <input type="checkbox" />
				  <span>Red</span>
				</label>*/
				
				
			}

            $("#returnMessage").html(conteudo_tabela);
        }
    }); 

}

function fLocalEventosClick(){


	$("#bCadastrar").click(function(){

		var registro = $("#cadastro")[0].checkValidity();

		if(registro){
			fLocalComunicaServidor('form', '../php/functions/cadastra-filme.php');
		}else{
			$("#cadastro")[0].reportValidity()
			return false;
		}
		
	});

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
	
	$("#bFavoritar").click(function(){

			fLocalComunicaServidor('form', '../php/functions/favorita-filme.php');
		
	});
}



function fLocalComunicaServidor(formulario, file){ //se bugar remover ="form"

	var dados = $("form").serialize();
	//alert(dados);

	$.ajax({
		type: "POST",
		dataType: "json",
		url: ""+file+"",
		data: dados,
		success:function(array){

			if(array["function"] == "cadastra-filme"){

				var conteudo_tabela = "";	

				if(array["status"] == "n"){

					//document.getElementById('email').value = '';	

					conteudo_tabela += "<tr>";
					conteudo_tabela += "<td>" + array["message"]+"</td>";
					conteudo_tabela += "</tr>";

					$("#returnMessage").html(conteudo_tabela);

				}else if(array["status"] == "y"){

					conteudo_tabela += "<tr>";
					conteudo_tabela += "<td>" + array["message"]+"</td>";
					conteudo_tabela += "</tr>";

					$("#returnMessage").html(conteudo_tabela);

					//window.location.href = '../php/functions/verificacao-email.php';
				}
			}

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

					/*conteudo_tabela += "<tr>";
					conteudo_tabela += "<td>" + array["message"]+"</td>";
					conteudo_tabela += "</tr>";

					$("#returnMessage").html(conteudo_tabela);*/

					window.location.href = 'pages/catalogo-geral.php';
					
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

/*function passConfirmation(){

		$('#password, #confirm_password').on('keyup', function () {
		if ($('#password').val() == $('#confirm_password').val()) {
		  $('#message').html('Iguais').css('color', 'green');
		} else 
		  $('#message').html('Diferentes').css('color', 'red');
	  });
}*/



