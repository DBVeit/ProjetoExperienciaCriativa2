$(document).ready(function(){
        
    $("#cadastro").submit(function(){
            var password = document.getElementById('password').value;
            password = $.MD5(password);
            document.getElementById("pass-hash").value = password;     
        })

    });

