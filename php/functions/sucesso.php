<?php
session_start();
include_once("../conexao.php");
include_once("verifica-login.php");

if (isset($_SESSION['email'])) {
	$result = mysqli_query($mysqli, "SELECT * FROM pessoa WHERE email='$email'");
	$row = $result->fetch_assoc();
	$plano = $row['plano'];
	if ($plano == 0 || $plano == "") {
		header('Location: ../../pages/escolher-plano.php');
	}else{
		header('Location: ../../main-page.php');
	}
}else{
	header('Location: autentica-usuario.php');
}
?>