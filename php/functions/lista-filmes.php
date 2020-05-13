<?php

include_once("../conexao.php");

$result = mysqli_query($mysqli, "SELECT * FROM filmes");

$i = 0;

while($registro = mysqli_fetch_assoc($result)){

    $retorno["filme"][$i]["titulo"] = $registro['titulo'];
    $retorno["filme"][$i]["info"] = $registro['info'];
    $retorno["filme"][$i]["link"] = $registro['link'];

    $i++;
}

echo json_encode($retorno);

?>