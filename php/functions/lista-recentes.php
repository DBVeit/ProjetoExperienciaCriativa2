<?php

include_once("../conexao.php");

$result = mysqli_query($mysqli, "SELECT * FROM filmes ORDER BY movie_id DESC LIMIT 2");

$i = 0;

while($registro = mysqli_fetch_assoc($result)){

    $retorno["filme"][$i]["titulo"] = $registro['titulo'];
    $retorno["filme"][$i]["info"] = $registro['info'];
    $retorno["filme"][$i]["link"] = $registro['link'];
    $retorno["filme"][$i]["id"] = $registro['movie_id'];

    $i++;
}

echo json_encode($retorno);

?>