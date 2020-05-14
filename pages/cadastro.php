

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico"/>
  <title>WatchIt!</title>
    

  <!-- CSS  -->
  <link rel="stylesheet" href="../css/all.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <!--<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery.md5.js"></script>
	<script src="../js/funcoes.js"></script>

</head>
<body>
  <nav class="grey darken-3 lighten-1 mat-header"  role="navigation" >
    <div class="nav-wrapper container"><a id="logo-container" href="../index.php" class="brand-logo" ><i class="material-icons" style="font-size: 39px;">play_circle_filled</i>WatchIt!</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Teste</a></li>
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a href="#">Teste</a></li>
      </ul>

      <ul class="right hide-on-med-and-down">
        <li><a href="#">Teste</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Menu</a></li>
      </ul>

      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  
  <main>
    <center>
      <div class="section"></div>
      <div class="section"></div>
      <div class="section"></div>

      <div class="container">
        <div class="grey darken-4 z-depth-1 grey lighten-4 row register-form">

          <form class="col s12" id="cadastro">
            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='name' id='name' autocomplete="off" required />
                <label for='name'>Nome</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='text' name='surname' id='surname' autocomplete="off" required/>
                <label for='surname'>Sobrenome</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='email' name='email' id='email' autocomplete="off" required/>
                <label for='email'>Email</label>
              </div>
            </div>

            <div class='row'>
              <div class='input-field col s12'>
                <input type='hidden' name='pass-hash' id='pass-hash'/>
                <input class='validate' type='password' name='password' id='password' autocomplete="off" required/>
                <label for='password'>Senha</label>
              </div>            
            </div>

            <!--<div class='row'>
              <div class='input-field col s12'>
                <input class='validate' type='password' name='confirm_password' id='confirm_password' autocomplete="off" required/>
                <label for='confirm_password'>Confirmação de Senha</label>
                
              </div>            
            </div>-->
            <center>
              <div class='row'>
                <button  type="button" id="bGravar" name='btn_login' class='col s12 btn btn-large waves-effect'>CADASTRAR</button>
              </div>
            </center>
          </form>
        </div>
        <center>
            <div style="display: inline-block; padding: 0px 48px 0px 48px;">
              <table style="color:white; font-size: 30px;" id="returnMessage"></table>
              <!--<span id='message'></span>-->
            </div>
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
            <a class="white-text" href="#!"><i style="font-size: 35px;"class="fab fa-instagram"></i></a></li>
            <li><a class="white-text" href="#!"><i class="fab fa-twitter footer-icon"></i></a>
            <a class="white-text" href="#!"><i style="font-size: 32px;"class="fab fa-google"></i></a></li>
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


