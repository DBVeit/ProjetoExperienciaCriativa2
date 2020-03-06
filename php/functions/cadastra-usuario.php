<?php

include_once("../conexao.php");
include_once("../PHPMailer/class.phpmailer.php");
include_once('../PHPMailer/PHPMailerAutoload.php');

 $name = $_POST["name"];
 $surname = $_POST["surname"];
 $email = $_POST["email"];
 $password = $_POST["password"];

mysqli_query($mysqli, "INSERT INTO pessoa (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')");



date_default_timezone_set('Etc/UTC');

$message = "Por favor clique no link abaixo para confirmar seu cadastro. <br><br> ";
$message .= "http://localhost/ProjetoExperienciaCriativa2/php/functions/confirmar-cadastro.php?email=$email";

$mail= new PHPMailer;
$mail->IsSMTP();        
$mail->SMTPDebug = 0;       // 0 = não mostra o debug, 2 = mostra o debug (mensagens de erro)
$mail->SMTPAuth = true;     // Autenticação ativada
$mail->SMTPSecure = 'ssl';  
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 465; 
$mail->Username = 'textexpcri@gmail.com'; // eu sempre usei gmail 
$mail->Password = 'teste2020';
$mail->SetFrom('textexpcri@gmail.com', 'Copel+');
$mail->addAddress('textexpcri@gmail.com','');
$mail->Subject=("Confirmacao do cadastro no XP criativa");
$mail->msgHTML($message);
   
$mail->send();

header('Location: ../../index.php');

/*
email: textexpcri@gmail.com
senha: teste2020
*/


?>
