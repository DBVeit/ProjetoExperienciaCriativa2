<?php
include_once("php/conexao.php");
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>WatchIt!</title>

    

  <!-- CSS  -->
  <link rel="stylesheet" href="css/all.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/jquery.md5.js"></script>
  <script src="js/encript.js"></script>
</head>
<body>
  <nav class="grey darken-3 lighten-1 mat-header" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><i class="material-icons" style="font-size: 39px;">play_circle_filled</i> WatchIt!</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Proto 1</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Proto 1</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
      
  <main>
    <center>
      <div class="section"></div>
      <div class="section"></div>
      <div class="section"></div>

      <div class="container ">
        <div class="grey darken-4 z-depth-5 row mat-form">

          <form class="col s12 " onsubmit="return e()" method="post" action="php/functions/autentica-usuario.php" id="cadastro">
            <?php if(isset($_SESSION['nao_autenticado'])):?>
              <a style="font-size: 15px; color: red;">Dados inválidos!</a>
            <?php
              endif;
              unset($_SESSION['nao_autenticado']);
            ?>
            <?php if(isset($_SESSION['nao_confirmado'])):?>
              <a style="font-size: 15px; color: red;">Usuário não confirmado!<br>Verifique seu email e tente novamente</a>
            <?php
              endif;
              unset($_SESSION['nao_confirmado']);
            ?>
            <div class='row'>
              <div class='col s12'>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' required />
                <label for='email'>Email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='password' id='password' required />
                <label for='password'>Senha</label>
              </div>
                <label style='float: right;'>
								<a class='pink-text' href='pages/recuperar-senha.php'><b>Esqueceu a senha ?</b></a>
			    </label>
            </div>

            <br />
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect'>ENTRAR</button>
              </div>
              <div class='row'>
              <a href="pages/cadastro.php">Criar conta</a>
              </div>
            </center>
          </form>
        </div>
      </div>
      
    </center>

  </main>

  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
        <h5 class="white-text">Quem somos</h5>
          <p class="grey-text text-lighten-4">Serviço de Streaming de vídeos do Youtube ! super útil</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!"><i style="font-size: 35px; padding: 0px 10px 7px 0px;"class="fab fa-facebook"></i></a>
            <a class="white-text" href="#!"><i style="font-size: 35px;"class="fab fa-instagram"></i></a></li>
            <li><a class="white-text" href="#!"><i style="font-size: 35px; padding: 0px 10px 7px 0px;"class="fab fa-twitter"></i></a>
            <a class="white-text" href="#!"><i style="font-size: 32px;"class="fab fa-google"></i></a></li>
            
          </ul>
        </div>
      </div>
    </div>
  </footer>
  
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  

  </body>
</html>


