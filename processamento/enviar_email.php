<?php
include_once './config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->SMTPSecure = 'starttls';

if (isset($_GET['usrname']) && isset($_GET['adress']) && isset($_GET['senha'])){
    $adress = $_GET['adress'];
    $login = $_GET['usrname'];
    $senha = $_GET['senha'];

try{
    $mail->Host = 'smtp-mail.outlook.com';//'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Port = 587;
    $mail->Username = 'sistemaposteip@outlook.com';
    $mail->Password = 'naoseiasenha2018';
    
    //Define o REMETENTE
    $mail->SetFrom('sistemaposteip@outlook.com','Mudo');
    $mail->AddReplyTo('sistemaposteip@outlook.com', 'Mudo');
    $mail->Subject = 'Sistema POSTe-IP';
    
    //Define o DESTINATÁRIO
    $mail->AddAddress(''.$adress, ''.$login);
    //$mail->addCC() //Copia
    ////$mail->addBCC() //Copia Oculta
    
    //CORPO DO E-MAIL
    $texto = utf8_decode('Olá <strong>'.$login.'</strong> você foi convidado para utilizar o sistema POSTe-IP <br><br>'
    . 'Acesse o link: https://luizlomba.com.br/posteip/Home.php e insira suas informações de cadastro:<br>'
    . 'Login: <strong>'.$login.'</strong><br>' 
    . 'Senha: <strong>'.$senha.'</strong><br><br>'
    .' Favor não responder esse e-mail');
    $mail->MsgHTML($texto);
    //ANEXO
    //  $mail->addAttachment('caminhoarquivo');//
    //COLOCAR O CONTEUDO DE UM ARQUIVO
    //$mail->msgHTML(file_get_contents('caminhoarquivo'));
    $mail->Send();
    //echo "Enviado com sucesso";
            
} catch (Exception $ex) {
    echo $ex->errorMessage();
}
}
header($url.'CadastroUsuario.php');