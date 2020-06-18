<?php
session_start();
include_once("../conexao.php");

$dados_usuario = $_SESSION['name'];
$result = mysqli_query($mysqli, "SELECT * FROM pessoa WHERE email='$dados_usuario'");
$row = $result->fetch_assoc();
$id_user = $row['id_user'];
$id = $_SESSION['id'];


$result_movies = mysqli_query($mysqli, "SELECT * FROM filmes where movie_id in (select movie_id from favoritos where id_user = $id)");


$i = 0;

while($registro = mysqli_fetch_assoc($result_movies)){

    $retorno["filme"][$i]["titulo"] = $registro['titulo'];
    $retorno["filme"][$i]["info"] = $registro['info'];
    $retorno["filme"][$i]["link"] = $registro['link'];
    $retorno["filme"][$i]["year"] = $registro['year_release'];
    $retorno["filme"][$i]["id"] = $registro['movie_id'];

    $i++;
}

echo json_encode($retorno);

?>