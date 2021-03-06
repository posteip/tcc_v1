<?php
include_once './helpers/nav.php';
include './helpers/verificaLogin.php';
include_once './helpers/preencherTabelas.php';
$idTela = 5;
?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php include './helpers/header.php'; ?>
    <?php include './estilo/estiloTabela.php'; ?>
    <title>Tipo Dado</title>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

        <?php exibirNav("Componentes")?>

        <?php include './helpers/MenuNavegacao.php';?>

        <div class="w3-main" style="margin-left:300px;">
            <!-- Container (Cadastro) -->
            <div id="cadastro" class="container-fluid bg-grey">
                <h2 class="text-center">NOVO TIPO DADO</h2>
                <div class="row">
                    <div class="col-sm-5 text-center" style="float: left; width: 30%">
                        <img src="./midia/tipodado1-icon.png"  style="width: 240px; height: 240px" class="img-responsive center-block">
                    </div>
                    <div class="col-sm-7 slideanim" style="float: left; width: 70%">
                        <div class="row">
                            <form action="/posteip/processamento/processaTipoDado.php" method="post">
                                <div class="col-sm-12 form-group">
                                    <p style="color: black">Nome:</p>
                                    <input class="form-control" id="name" name="elemento" placeholder="Nome" type="text" required>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12 form-group text-center">
                                        <button class="btn btn-default" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form><p class="fonte_erro" style="color:black">
                                <?php
                                //CASO O USUARIO TENTE CADASTRAR UM LOGIN JÁ EXISTENTE, UMA MSG DE ERRO APARECERA
                                if (isset($_SESSION['msgCadastroTipoDado'])) {
                                    echo $_SESSION['msgCadastroTipoDado'];
                                    unset($_SESSION['msgCadastroTipoDado']);
                                }
                                ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Listagem de usuários já cadastrados -->
            <div id="listagem" class="container-fluid">
                <h2 class="text-center">TIPOS EM USO</h2><br>
                <div class="row">
                    <div class="col-sm-8" style="width: 100%">
                        <form action="/posteip/processamento/processaComponentes" method="post">
                            <table>
                                <tr>
                                    <th style="width: 10%">ID</th>
                                    <th>Nome</th>
                                    <th>Componentes Vinculados</th>
                                    <th>Ações</th>
                                </tr>
                                <?php
                                    buscaTipoDado();
                                ?>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
            <?php
                if (isset($_SESSION['idTipoDado']) && isset($_SESSION['elemento'])){
                    echo '<div id="update" class="container-fluid bg-grey">
                <h2 class="text-center">EDITAR TIPO DADO</h2>
                <div class="row">
                    <div class="col-sm-7 slideanim" style="float: left; width: 70%">
                        <div class="row">
                            <form action="/posteip/processamento/processaTipoDado.php" method="post">
                                <input type="hidden" value='.$_SESSION['idTipoDado'].' name="id">
                                <div class="col-sm-12 form-group">
                                    <p style="color: black">Elemento:</p>
                                    <input class="form-control" name="editElemento" placeholder="Nome" type="text" value='.$_SESSION['elemento'].' required>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12 form-group text-center">
                                        <button class="btn btn-default" type="submit">Enviar</button>
                                    </div>
                                </div>
                            </form><p class="fonte_erro" style="color:black">';
                                //CASO O USUARIO TENTE CADASTRAR UM LOGIN JÁ EXISTENTE, UMA MSG DE ERRO APARECERA
                                if (isset($_SESSION['msgEditarTipoDado'])) {
                                    echo $_SESSION['msgEditarTipoDado'];
                                    unset($_SESSION['msgEditarTipoDado']);
                                }
                                echo '</p>
                        </div>
                    </div>
                </div>
            </div>';
                }
            ?>
            <?php include './helpers/footer.php';?>
        </div>
    </body>
</html>
