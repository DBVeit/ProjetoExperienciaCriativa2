<?php

//session_start(
    //'cookie_lifetime' => 86400,
    //'read_and_close'  => true,
//);

include_once("../conexao.php");

$title = $_POST["title"];
$year = $_POST["year"];
$info = $_POST["description"];
$genre = $_POST["genre"];
$link = $_POST["link"];

$concat_link = "<iframe width='560' height='315' src='https://www.youtube.com/embed/" .$link. "' frameborder='0'></iframe>";
 
$concat_link = mysqli_real_escape_string($mysqli, $concat_link);
 

 
//$password = $_POST["pass-hash"];

    

 //$_SESSION['email'] = $email;

$result = mysqli_query($mysqli, "SELECT * FROM filmes WHERE titulo='$title'");
$result->fetch_assoc();

$row = 0;
$row = mysqli_num_rows($result);

if($row == 1){
    $retorno["status"] = "n";
    $retorno["function"] = "cadastra-filme";
    $retorno["message"] = "Este filme já está cadastrado";
}else if($row == 0){

    $retorno["status"] = "y";
    $retorno["function"] = "cadastra-filme";
    $retorno["message"] = "Filme cadastrado com sucesso";

    $rv = mysqli_query($mysqli, "INSERT INTO filmes (titulo, info, link, year_release, genre) VALUES ('$title','$info','$concat_link','$year','$genre')");
    if ( $rv === false ){
        echo("deu erro");
   }
};

echo json_encode($retorno);


/*
email: testexpcri@gmail.com
senha: teste2020
*/

?>
