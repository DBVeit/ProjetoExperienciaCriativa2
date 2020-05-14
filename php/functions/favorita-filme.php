<?php

session_start(
    //'cookie_lifetime' => 86400,
    //'read_and_close'  => true,
);

$dados_usuario = $_SESSION['name'];
$id = $_SESSION['id'];

//echo $dados_usuario;
//echo $id;


include_once("../conexao.php");


    $_POST['filmes'] = explode(',',$_POST['filmes']);

    foreach($_POST['filmes']as $filme){

    $filme = trim($filme);

    //echo $filme;
    print_r ($filme);

    //mysqli_query($mysqli, "INSERT INTO favoritos (id_user,movie_id) VALUES ('$id','$filme')"); FUNCIONOU

    mysqli_query($mysqli, "INSERT INTO favoritos (id_user,movie_id) VALUES ('$id','$filme')");

    }
 
 
 //echo $id;

 //$_SESSION['email'] = $email;

/*

$result = mysqli_query($mysqli, "SELECT * FROM pessoa WHERE email='$email'");
$result->fetch_assoc();

$row = 0;
$row = mysqli_num_rows($result);

if($row == 1){
    $retorno["status"] = "n";
    $retorno["function"] = "cadastra-usuario";
    $retorno["message"] = "Já existe um usúario cadastrado nesse e-mail";
}else if($row == 0){

    $retorno["status"] = "y";
    $retorno["function"] = "cadastra-usuario";
    $retorno["message"] = "Foi eviado um e-mail para confirmação do cadastro";
    $retorno["email"] = $email;

    mysqli_query($mysqli, "INSERT INTO pessoa (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')");
};

echo json_encode($retorno);



email: testexpcri@gmail.com
senha: teste2020

*/

?>
