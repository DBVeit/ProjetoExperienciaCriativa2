<?php
if($_SESSION['name']){
	header("Location: pages/catalogo-geral.php");
	exit();
}
?>