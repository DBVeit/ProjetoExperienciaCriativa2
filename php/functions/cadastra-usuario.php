<?php

include_once("../conexao.php");

 $name = $_POST["name"];
 $surname = $_POST["surname"];
 $email = $_POST["email"];
 $password = $_POST["password"];

mysqli_query($mysqli, "INSERT INTO pessoa (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')");



?>
