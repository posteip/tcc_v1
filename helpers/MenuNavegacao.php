<?php
include '../processamento/preencherDashboard.php';

echo '<!-- Sidebar/menu -->';
if (($_SERVER['REQUEST_URI'] == "/tcc_v1/html/DashboardRoot.php")) {
    echo '<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>';
}else{
    echo '<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;padding-top:30px" id="mySidebar"><br>';
}
  
  echo '<div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="../midia/Usuario.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Bem vindo, <strong>' . $userName . '</strong></span><br>
      <a href="/tcc_v1/processamento/processaUsuario.php?sair=sim" class="w3-bar-item w3-button"><i class="fa fa-sign-out"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>';
if (($_SERVER['REQUEST_URI'] == "/tcc_v1/html/CadastroUsuario.php")) {
    echo'<a href="CadastroUsuario.php" class="w3-bar-item w3-button w3-blue"><i class="fa fa-user-plus"></i></a>';
} else {
    echo '<a href="CadastroUsuario.php" class="w3-bar-item w3-button"><i class="fa fa-user-plus"></i></a>';
}
echo'</div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu de Navegação</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>';
if (($_SERVER['REQUEST_URI'] == "/tcc_v1/html/DashboardRoot.php")) {
    echo '<a href="DashboardRoot.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-dashboard fa-fw"></i>  Dashboard</a>';
} else {
    echo '<a href="DashboardRoot.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-dashboard fa-fw"></i>  Dashboard</a>';
}
if(($_SERVER['REQUEST_URI'] == "/tcc_v1/html/CadastroControladores.php")) {
    echo '<a href="CadastroControladores.php" class="w3-bar-item w3-button w3-padding w3-blue"><img src="../midia/rasp-icon.png" class="fa-fw">  Controladores Centrais</a>';
}else{
    echo '<a href="CadastroControladores.php" class="w3-bar-item w3-button w3-padding"><img src="../midia/rasp-icon.png" class="fa-fw">  Controladores Centrais</a>';
}
if(($_SERVER['REQUEST_URI'] == "/tcc_v1/html/CadastroPlataformas.php")){
    echo '<a href="CadastroPlataformas.php" class="w3-bar-item w3-button w3-padding w3-blue"><img src="../midia/arduino-icon.png" class="fa-fw">  Plataformas</a>';
}
else{
    echo '<a href="CadastroPlataformas.php" class="w3-bar-item w3-button w3-padding"><img src="../midia/arduino-icon.png" class="fa-fw">  Plataformas</a>';
}
echo '<a href="#" class="w3-bar-item w3-button w3-padding"><img src="../midia/poste-icon.png" class="fa-fw">  Postes</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-diamond fa-fw"></i>  Sensores</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bell fa-fw"></i>  News</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bank fa-fw"></i>  General</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-history fa-fw"></i>  History</a>
    <a href="#" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Settings</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");

    // Toggle between showing and hiding the sidebar, and add overlay effect
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
