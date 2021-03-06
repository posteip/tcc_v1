<?php
session_start();
include_once "config.php";
include_once "Connection.php";
$conexao = new Connection();
$conexao->connect($host, $user, $password, $database);

if (isset($_SERVER['HTTP_REFERER']) == FALSE) {
    header($url.'AutenticacaoUsuario.php');
} else {
    //REALIZA O CADASTRO
    if (!empty($_POST['elemento'])){
        $elemento = htmlspecialchars($_POST['elemento']);
        $verifica = "SELECT id FROM tipodado WHERE elemento = '" . $elemento . "'";
        $conexao->query($verifica);
        $dados = $conexao->fetch_row();
        if ($dados[0] == null) {
            $string = "INSERT INTO tipodado (elemento) VALUES ('".$elemento."')";
            $conexao->query($string);   
            $_SESSION['msgCadastroTipoDado'] = "Tipo Dado cadastrado com sucesso";
            header($url.'TipoDado.php');
        }else{
            $_SESSION['msgCadastroTipoDado'] = "ERRO: Nome informado já cadastrado";
            header($url.'TipoDado.php');
        }
    }
    //SOLICITA EDIÇÃO
    else if (!empty($_GET['up']) && is_numeric($_GET['up']) && !empty($_GET['elemento'])) {
        $_SESSION['idTipoDado'] = $_GET['up'];
        $_SESSION['elemento'] = $_GET['elemento'];
        header($url.'TipoDado.php#update');
    }
    else if (!empty($_POST['id']) && !empty(trim($_POST['editElemento']))) {
        $verifica = "SELECT id FROM tipodado WHERE elemento = '" . $_POST['editElemento'] . "'";
        $conexao->query($verifica);
        $dados = $conexao->fetch_row();
        if ($dados[0] == $_POST['id'] || $dados[0] == null) {
            $sql = "UPDATE `tipodado` SET `elemento` = '".$_POST['editElemento']."' WHERE tipodado.id = ".$_POST['id'];
            $conexao->query($sql);
            unset($_SESSION['idTipo']);
            unset($_SESSION['elemento']);
            header($url.'TipoDado.php');
        }else{
            $_SESSION['msgEditarTipoDado'] = "ERRO: Nome informado já cadastrado";
            header($url.'TipoDado.php#update');
        }
    }
    else if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
        
    }//LOGOUT
    
}
$conexao->close();
unset($conexao);
?>

