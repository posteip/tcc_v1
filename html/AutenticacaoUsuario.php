<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>PosteIP</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="../css/MeuCSS.css" rel="stylesheet" type="text/css">
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="Home.html">PosteIP</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#login">Login</a></li>
            <li><a href="#cadastro">Cadastre-se</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="login" class="container-fluid bg-1 text-center">
      <h3 class="margin"><b>Login</b></h3>
      <img src="../midia/Usuario.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="250" height="250"><br>
    <br>
    <div class="col-sm-3"></div>
    <div class="col-sm-6">
    <form action="/tcc_v1/processamento/processaUsuario.php" method="post">        
        <div class="form-group col-sm-12">
              <input class="form-control" id="name" name="login" placeholder="Usuario" type="text" required>
            </div>
        <div class="form-group col-sm-12">
                <input class="form-control" id="password" name="senha" placeholder="Senha" type="password" required>
            </div>

            <div class="col-sm-12 form-group">
                <button class="btn btn-default" type="submit">Entrar</button>
            </div>
    </form>
        <?php//CASO O USUARIO DIGITE UM LOGIN OU SENHA INCORRETO, UMA MSG DE ERRO APARECERÁ NA TELA
            if (isset($_SESSION['erroLogin'])){
                print $_SESSION['erroLogin'];
                unset($_SESSION['erroLogin']);
            }
        ?>

        <h4 class="margin form-group">Não tem conta?<a href=#cadastro style="color: #0056b3"> Clique aqui </a></h4>
    </div>
    </div>


    <!-- Container (Contact Section) -->
    <div id="cadastro" class="container-fluid bg-grey">
      <h2 class="text-center">CADASTRO</h2>
      <div class="row">
          <div class="col-sm-5 text-center" style="float: left; width: 30%">
            <img src="../midia/Usuario.png" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="200" height="200">
          <h4>Escolha uma foto</h4>
        </div>
          <div class="col-sm-7 slideanim" style="float: left; width: 70%">
          <div class="row">
              <form action="/tcc_v1/processamento/processaUsuario.php" method="post">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="nome" placeholder="Nome" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="sobrenome" placeholder="Sobrenome" type="text" required>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          <div class="col-sm-6 form-group">
              <input class="form-control" id="Username" name="usrname" placeholder="Usuario" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
                <input class="form-control" id="UsrPass" name="senha" placeholder="Senha" type="password" required>
            </div><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" type="submit">Enviar</button>
            </div>
            </div>
            </form>
              <?php//CASO O USUARIO TENTE CADASTRAR UM LOGIN JÁ EXISTENTE, UMA MSG DE ERRO APARECERA
                if (isset($_SESSION['erroNomeLogin'])){
                    print $_SESSION['erroNomeLogin'];
                    unset($_SESSION['erroNomeLogin']);
                }
                ?>
          </div>
        </div>
      </div>
    </div>
    
    <div class = "rodapé">
        <h5>Projeto Incentivado pelo IFMS</h5>
    </div>
</body>
</html>
