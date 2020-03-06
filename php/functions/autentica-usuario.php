<?php

include_once("../conexao.php");

$password = $_POST["password"];
$email = $_POST["email"];

$result = mysqli_query($mysqli, "SELECT email, password FROM pessoa WHERE email='$email' AND password='$password'");

$row = mysqli_num_rows($result);

if($row == 1){
    header('Location: ../../sucesso.php');
}else{
    header('Location: ../../index.php');
}

?>