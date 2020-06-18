<?php

include_once("../conexao.php");

session_start();



$result = mysqli_query($mysqli, "SELECT * FROM filmes");

$i = 0;



if(isset($_SESSION['id']))
{
    while($registro = mysqli_fetch_assoc($result)){

        $retorno["filme"][$i]["auth"] = "usuario";
        $retorno["filme"][$i]["titulo"] = $registro['titulo'];
        $retorno["filme"][$i]["info"] = $registro['info'];
        $retorno["filme"][$i]["link"] = $registro['link'];
        $retorno["filme"][$i]["year"] = $registro['year_release'];
        $retorno["filme"][$i]["id"] = $registro['movie_id'];

        $i++;
    }  

}else{

    while($registro = mysqli_fetch_assoc($result)){


        $retorno["filme"][$i]["auth"] = "visitante";
        $retorno["filme"][$i]["titulo"] = $registro['titulo'];
        $retorno["filme"][$i]["info"] = $registro['info'];
        $retorno["filme"][$i]["thumb"] = $registro['thumb'];
        $retorno["filme"][$i]["id"] = $registro['movie_id'];
    
        $i++;
    } 

};


echo json_encode($retorno);

?>