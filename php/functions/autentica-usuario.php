<?php

include_once("../conexao.php");

$password = $_POST["pass-hash"];
$email = $_POST["email"];

$result = mysqli_query($mysqli, "SELECT * FROM pessoa WHERE email='$email' AND password='$password'");
$user_data = $result->fetch_assoc();

$row = mysqli_num_rows($result);

if($row == 1){
    $row = 0;
    //$_SESSION['email'] = $email;
    //$_SESSION['name'] = $user_data['name'];

    header('Location: ../../sucesso.php');
}else{
    header('Location: ../../falhou.php');
}



?>