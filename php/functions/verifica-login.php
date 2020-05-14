<?php
if(!$_SESSION['name']){
	header("Location: ../index.php");
	exit();
}
?>