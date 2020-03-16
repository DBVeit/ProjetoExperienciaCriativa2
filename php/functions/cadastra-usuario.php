<?php

session_start(
    //'cookie_lifetime' => 86400,
    //'read_and_close'  => true,
);

include_once("../conexao.php");

 $name = $_POST["name"];
 $surname = $_POST["surname"];
 $email = $_POST["email"];
 $password = $_POST["pass-hash"];

 $_SESSION['email'] = $email;



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


/*
email: testexpcri@gmail.com
senha: teste2020
*/

?>
