<?php
session_start();
include_once("../conexao.php");

$password = $_POST["password"];
$email = $_POST["email"];

$result = mysqli_query($mysqli, "SELECT * FROM pessoa WHERE email='$email' AND password=md5('$password')");
$user_data = $result->fetch_assoc();

$row = mysqli_num_rows($result);

if($row == 1){
	if($user_data['confirmacao'] != 0){
		$_SESSION['email'] = $email;
    	$_SESSION['name'] = $user_data['name'];
    	header('Location: sucesso.php');
	}else{
		$_SESSION['nao_confirmado'] = true;
		header('Location: ../../index.php');
		exit();
	}
}else{
	$_SESSION['nao_autenticado'] = true;
    header('Location: ../../index.php');
    exit();
}
?>
