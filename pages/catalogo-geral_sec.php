<?php

session_start();

$guest = $_SESSION['name'];
//var_dump($guest);
$id = 0;

if(empty($guest)){
  $id = 1;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico" />
  <title>WatchIt!</title>


  <!-- CSS  -->
  <link rel="stylesheet" href="../css/all.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery.md5.js"></script>
  <script src="../js/funcoes.js"></script>

  <style>

div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

.navButtons:{
  transition-duration: 0.5s;
}
.navButtons:hover{
  background-color: grey;
  transition-duration: 0.5s;
}
</style>



</head>

<body class="displayMovie" id="<?php echo $id; ?>">



  <nav class="grey darken-3 lighten-1 mat-header" role="navigation">
    <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a>

    <div class="nav-wrapper container">
      <a id="logo-container" href="../index.php" class="brand-logo">
        <i class="material-icons" style="font-size: 39px;">play_circle_filled</i>WatchIt!</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"></a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"></a></li>
      </ul>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"></a></li>
      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Menu</a></li>
      </ul>
    </div>

  </nav>

  <ul id="slide-out" class="sidenav" style="background-color: #181a19;">
    <div align="center" style=" margin-top: 50px;">
      <li class="navButtons">
        <a href="../index.php" style="color: white;">Entrar</a>
      </li>
      <li class="navButtons">
        <a href="cadastro.php" style="color: white;">Criar Conta</a>
      </li>
      <li class="navButtons">
        <a href="recuperar-senha.php" style="color: white;">Esqueceu a senha?</a>
      </li>
    </div>
  </ul>

  <main>
    <center>
      <div class="section"></div>
      <div class="section"></div>
      <div class="section"></div>
      <div class="container" >

        <center>
          <form action="#">
            <div style="display: inline-block; padding: 0px 48px 0px 48px;">
              <table style="color:white; font-size: 16px;" id="returnMessage"></table>
            </div>
          </form>
        </center>
      </div>
    </center>
  </main>

  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Quem somos</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce aliquam dui vel sem tempor, vehicula suscipit massa luctus. Nunc feugiat mauris vel orci ultrices, ut.</p>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Lorem</a></li>
            <li><a class="white-text" href="#!">Ipsum</a></li>
            <li><a class="white-text" href="#!">Dolor</a></li>
            <li><a class="white-text" href="#!">Amet</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!"><i class="fab fa-facebook footer-icon"></i></a>
              <a class="white-text" href="#!"><i style="font-size: 35px;" class="fab fa-instagram"></i></a></li>
            <li><a class="white-text" href="#!"><i class="fab fa-twitter footer-icon"></i></a>
              <a class="white-text" href="#!"><i style="font-size: 32px;" class="fab fa-google"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!--  Scripts-->
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

</body>
</html>