<?php
include_once  './processamento/preencherDashboard.php';
echo '<!-- Sidebar/menu -->';
if (($_SERVER['REQUEST_URI'] == "/posteip/DashboardRoot.php")) {
    echo '<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>';
}else{
    echo '<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;padding-top:30px" id="mySidebar"><br>';
}
  echo '<div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="./midia/Usuario.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Bem vindo, <strong>' . $userName . '</strong></span><br>
      <a href="/posteip/processamento/processaUsuario.php?sair=sim" class="w3-bar-item w3-button"><i class="fa fa-sign-out-alt" title="SAIR"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>';
if ($tipoUsuario == 1){
    if ($idTela == 1) {
        echo'<a href="CadastroUsuario.php" class="w3-bar-item w3-button w3-blue"><i class="fa fa-user-plus" title="Usuários"></i></a>';
    } else {
        echo '<a href="CadastroUsuario.php" class="w3-bar-item w3-button"><i class="fa fa-user-plus" title="Usuários"></i></a>';
    }
}
echo'</div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu de Navegação</h5>
  </div>
  <div class="w3-bar-block">
  <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
  </div>
  <div class="w3-container">
    <h6><strong>Funcionalidades</strong></h6>
  </div>
  <div class="w3-bar-block">';
//DASHBOARD
if (($_SERVER['REQUEST_URI'] == "/posteip/DashboardRoot.php")) {
    echo '<a href="DashboardRoot.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-map fa-fw"></i>  Visão Geral</a>';
} else {
    echo '<a href="DashboardRoot.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-map fa-fw"></i>  Visão Geral</a>';
}
if (($_SERVER['REQUEST_URI'] == "/posteip/ConsumoEnergetico.php")) {
    echo'<a href="ConsumoEnergetico.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-bolt fa-fw"></i>  Consumo Energético</a>';
}else{
    echo'<a href="ConsumoEnergetico.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bolt fa-fw"></i>  Consumo Energético</a>';
}
if ($_SERVER['REQUEST_URI'] == "/posteip/Lampadas.php" || $_SERVER['REQUEST_URI'] == "/posteip/VariacaoIntensidade.php?" ) {
    echo '<a href="Lampadas.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-lightbulb fa-fw"></i>  Lâmpadas</a>';    
}else{
    echo '<a href="Lampadas.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-lightbulb fa-fw"></i>  Lâmpadas </a>';
}
echo'</div>';
   //MOSTRA AS FERRAMENTAS EXCLUSIVAS DO ADMINISTRADOR 
if ($tipoUsuario == 1){
   echo'
  <div class="w3-container">
    <h6><strong>Ferramentas Administrativas</strong></h6>
  </div>
  <div class="w3-bar-block">';
    //CADASTRO CONTROLADORES
    if($idTela == 2) {
        echo '<a href="CadastroControladores.php" class="w3-bar-item w3-button w3-padding w3-blue"><img src="./midia/rasp-icon.png" class="fa-fw">  Controladores Centrais</a>';
    }else{
        echo '<a href="CadastroControladores.php" class="w3-bar-item w3-button w3-padding"><img src="./midia/rasp-icon.png" class="fa-fw">  Controladores Centrais</a>';
    }
    //CADASTRO DE PLATAFORMAS
    if($idTela == 3){
        echo '<a href="CadastroPlataformas.php" class="w3-bar-item w3-button w3-padding w3-blue"><img src="./midia/arduino-icon.png" class="fa-fw">  Plataformas</a>';
    }
    else{
        echo '<a href="CadastroPlataformas.php" class="w3-bar-item w3-button w3-padding"><img src="./midia/arduino-icon.png" class="fa-fw">  Plataformas</a>';
    }
    //POSTES
    if($idTela == 4){
        echo '<a href="CadastroPostes.php" class="w3-bar-item w3-button w3-padding w3-blue"><img src="./midia/poste-icon2.png" class="fa-fw">  Postes</a>';
    }
     else {
         echo '<a href="CadastroPostes.php" class="w3-bar-item w3-button w3-padding"><img src="./midia/poste-icon2.png" class="fa-fw">  Postes</a>';
    }
    //COMPONENTES
    if ($idTela == 5){
        echo '<a href="CadastroComponentes.php" class="w3-bar-item w3-button w3-padding w3-blue"><img src="./midia/sensor-icon.png" class="fa-fw">  Sensores</a>';
    }else{
        echo '<a href="CadastroComponentes.php" class="w3-bar-item w3-button w3-padding"><img src="./midia/sensor-icon.png" class="fa-fw">  Sensores</a>';
    }
    //CONEXOES
    if($idTela == 6){
        echo '<a href="CadastroConexoes.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-code-branch fa-fw"></i>  Conexoes</a>';
    }
     else {
         echo '<a href="CadastroConexoes.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-code-branch fa-fw"></i>  Conexoes</a>';
    }
    echo '<br><br>
    </div>';
}
echo '</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    //Toggle between showing and hiding the sidebar, and add overlay effect
    function w3_open() {
        if (mySidebar.style.display === "block") {
            mySidebar.style.display = "none";
            overlayBg.style.display = "none";
        } else {
            mySidebar.style.display = "block";
            overlayBg.style.display = "block";
        }
    }

    // Close the sidebar with the close button
    function w3_close() {
        mySidebar.style.display = "none";
        overlayBg.style.display = "none";
    }
</script>';

?>
