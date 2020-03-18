<?php

session_start();

include_once("../PHPMailer/class.phpmailer.php");
include_once('../PHPMailer/PHPMailerAutoload.php');

sendMsg();

unset($_SESSION["email"]);

header("Location: ../../index.php"); 

function sendMsg(){
    date_default_timezone_set('Etc/UTC');

    echo $email = $_SESSION['email'];

    $message = "Por favor clique no link abaixo para confirmar seu cadastro. <br><br> ";
    $message .= "http://localhost:8888/ProjetoExperienciaCriativa2/php/functions/confirmar-cadastro.php?email=$email";

    $mail= new PHPMailer;
    $mail->IsSMTP();        
    $mail->SMTPDebug = 2;       // 0 = não mostra o debug, 2 = mostra o debug (mensagens de erro)
    $mail->SMTPAuth = true;     // Autenticação ativada
    $mail->SMTPSecure = 'ssl';  
    $mail->Host = 'smtp.gmail.com'; 
    $mail->Port = 465; 
    $mail->Username = 'testexpcri@gmail.com'; // eu sempre usei gmail 
    $mail->Password = 'teste2020';
    $mail->SetFrom('testexpcri@gmail.com', 'Copel+');
    $mail->addAddress('testexpcri@gmail.com','');
    $mail->Subject=("Confirmacao do cadastro no XP criativa");
    $mail->msgHTML($message);

    $mail->send();
};

?>