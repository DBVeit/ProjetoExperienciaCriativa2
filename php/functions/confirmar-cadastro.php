<?php

include_once("../conexao.php");
$email = $_GET["email"];
echo $email;

mysqli_query($mysqli, "UPDATE pessoa SET confirmacao = '1' WHERE email ='$email'");


?>