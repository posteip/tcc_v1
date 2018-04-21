<?php
if (isset($_SERVER['HTTP_REFERER']) == FALSE) {
    header('location:/tcc_v1/html/AutenticacaoUsuario.php');
}
//include_once '../processamento/preencherTabelas.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php include '../helpers/header.php'; ?>
    <title>Cadastro de Controladores</title>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        
        <nav class="w3-bar navbar navbar-default navbar-fixed-top" style="z-index:4;">
            <div class="container">
                <div class="navbar-header">
                    <button class=" navbar-brand w3-bar-item w3-button w3-hide-large w3-hover-none w3-text-white" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>    
                    <a class="navbar-brand">Controladores</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="CadastroControladores.php#cadastro">Cadastro</a></li>
                        <li><a href="#">Gerenciar</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <?php include '../helpers/MenuNavegacao.php'; ?>

        <div class="w3-main" style="margin-left:300px;">
            <!-- Container (Cadastro) -->
            <div id="cadastro" class="container-fluid bg-grey">
                <h2 class="text-center">CADASTRO</h2>
                <div class="row">
                    <div class="col-sm-5 text-center" style="float: left; width: 30%">
                        <i class="fa fa-user-plus logo img-responsive" style="color: gray"></i>
                    </div>
                    <div class="col-sm-7 slideanim" style="float: left; width: 70%">
                        <div class="row">
                            <form action="/tcc_v1/processamento/processaControlador.php" method="post">
                                <div class="col-sm-12 form-group">
                                    <p style="color: black">Nome:</p>
                                    <input class="form-control" id="nome" name="nome" placeholder="Nome" type="text" value="" required>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <p style="color: black">Localização:</p>
                                    <input class="form-control" id="lat" name="latitude" placeholder="Latitude" type="number" required>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <input class="form-control" id="long" name="longitude" placeholder="Longitude" type="number" required>
                                </div>
                                <div class="col-sm-12 form-group">
                                    <p style="color: black">Descrição:</p>
                                    <input class="form-control" id="desc" name="descricao" placeholder="Descricao" type="text" required>
                                </div><br>
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <button class="btn btn-default pull-right" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form><p class="fonte_erro" style="color:red">
                                <?php
                                //CASO O USUARIO TENTE CADASTRAR UM LOGIN JÁ EXISTENTE, UMA MSG DE ERRO APARECERA
                                if (isset($_SESSION['erroNomeLogin'])) {
                                    echo $_SESSION['erroNomeLogin'];
                                    unset($_SESSION['erroNomeLogin']);
                                }
                                ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class = "rodapé">
                <p>POSTe IP - Projeto Incentivado pelo IFMS</p>
            </div>
        </div>
    </body>
</html>

