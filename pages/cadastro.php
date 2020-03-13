<?php?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>WatchIt! - Prototype 1</title>

    

  <!-- CSS  -->
  <link rel="stylesheet" href="../css/all.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/jquery.md5.js"></script>
  <script src="../js/encript.js"></script>
</head>
<body>
  <nav class="grey darken-3 lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><i class="material-icons" style="font-size: 39px;">play_circle_filled</i>WatchIt!</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Proto 1</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Proto 1</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br><br>
      <div class="row center">
      <div class="section"></div>
  <main>
    <center>

      <div class="container">
        <div class="grey darken-3 z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; width: 45%">

          <form class="col s12" onsubmit="return e()" method="post" action="../php/functions/cadastra-usuario.php" id="cadastro">
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='name' id='name' required/>
                <label for='name'>Nome</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='surname' id='surname' required/>
                <label for='surname'>Sobrenome</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' required/>
                <label for='email'>Email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input type='hidden' name='pass-hash' id='pass-hash'/>
                <input class='validate' type='password' name='password' id='password' required/>
                <label for='password'>Senha</label>
              </div>    
              
            </div>
            
            
            <center>
              <div class='row'>
                <button type='submit' name='btn_login' class='col s12 btn btn-large waves-effect'>CADASTRAR</button>
              </div>
            </center>
          </form>
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>
      </div>
      <br><br>

    </div>
  </div>


  <div class="container">
    <div class="section">

    
      <!--   Icon Section   -->

      <div class="row">

      <!--
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>
      -->
        <!--<div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>
        -->

        <!--<div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        -->
        </div>
      </div>

    </div>
    <br><br>
  </div>
  

  <footer class="page-footer grey darken-3">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
        <h5 class="white-text">Quem somos</h5>
          <p class="grey-text text-lighten-4">Serviço de streaming de vídeos do Youtube ! Super útil</p>


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
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>
  

  </body>
</html>


