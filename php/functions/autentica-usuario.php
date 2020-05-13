<?php
session_start();
include_once("../conexao.php");

$password = $_POST["pass-hash"];
$email = $_POST["email"];

$result = mysqli_query($mysqli, "SELECT * FROM pessoa WHERE email='$email' AND password='$password'");
$resultTwo = mysqli_query($mysqli, "SELECT * FROM pessoa WHERE email='$email' AND password='$password' AND confirmacao= 1 ");

$result->fetch_assoc();
$resultTwo->fetch_assoc();

$row = mysqli_num_rows($result);
$rowTwo = mysqli_num_rows($resultTwo);

if($row == 1 && $rowTwo == 1){
    
    $retorno["status"] = "y";
    $retorno["function"] = "autentica-usuario";
    $retorno["message"] = "Usúario autenticado !";
    $_SESSION['name'] = $email;
    
    //header('Location: ../../autenticado.php');
}else if($row == 1 && $rowTwo == 0){

    $retorno["status"] = "n";
    $retorno["function"] = "autentica-usuario";
    $retorno["message"] = "Valide seu cadastro por e-mail ! ";

    //header('Location: ../../nao-autenticado.php');
}else{
    $retorno["status"] = "u";
    $retorno["function"] = "autentica-usuario";
    $retorno["message"] = "Dados incorretos ou usúario não cadastrado !";
    //header('Location: ../../usuario-incorreto-ou-nao-cadastrado.php');
}

echo json_encode($retorno);

?>
