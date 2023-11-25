<?php
//inclui verificação de sessão
include "sessao.php";

//pega o nome da sessão
$nome = $_SESSION['nome'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Área dos Pais</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif;}
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-right w3-hide-large w3-hover-white w3-large w3-theme-l1" href="javascript:void(0)" onclick="w3_open()"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-theme-l1"><i style="font-size:24px" class="fa">&#xf135;</i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Notas</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Reuniões</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Aulas</a>
    <a href="deslogar.php" class="w3-bar-item w3-button w3-hide-small w3-hide-medium w3-hover-white">Sair</a>
  </div>
</div>

<!-- Sidebar -->
<nav class="w3-sidebar w3-bar-block w3-collapse w3-large w3-theme-l5 w3-animate-left" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-padding-large w3-hover-black w3-hide-large" title="Close Menu">
    <i class="fa fa-remove"></i>
  </a>
  <h4 class="w3-bar-item"><b>Area dos Responsáveis</b></h4>
  <a class="w3-bar-item w3-button w3-hover-black" id="#">Falar com Professor</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Mensalidades e Material</a>
  <a class="w3-bar-item w3-button w3-hover-black" href="#">Desempenho do aluno</a>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- Main content: shift it to the right by 250 pixels when the sidebar is visible -->
<div class="w3-main" style="margin-left:250px">

  <div class="w3-row w3-padding-64">
    <div class="w3-twothird w3-container">
      <h1 class="w3-text-teal">Bem vindo <?php echo $nome; ?></h1>
      <p id="painel">
    Bem vindo à área dos pais e responsáveis
    </p>
    </div>
    <div class="w3-third w3-container">
      <p class="w3-border w3-padding-large w3-padding-32 w3-center">AD</p>
      <p class="w3-border w3-padding-large w3-padding-64 w3-center">AD</p>
    </div>
  </div>

  <script>

//o que será executado quando o documento acabar de carregar (estiver pronto)
$(document).ready(function(){

  //o que será executado quando clicar no elemento cujo id é listarUsuarios
  $("#listarUsuarios").click(function(){
    
    //faz a requisição assincrona
    $.post("listarUsuariosJSON.php", function(data){
      
      //decodifica o JSON retornado pelo servidor em data para o vetor
      var users = JSON.parse(data);

      //monta a tabela com os dados do vetor para exibir no painel
      var table = "<table class='w3-table w3-striped'>";
      for(i = 0; i < users.length; i++)
      {
        table += "<tr><td>"+users[i]['name']+"</td><td>"+users[i]['email']+"</td><td>"+users[i]['type']+"</td></tr>";
      }
      table += "</table>";

      //insere a table no painel
      $("#painel").html(table);
      
    })
  })
})
/*  function listarUsuarios() 
  {
    //cria um objeto para fazer a requisição ao servidor
    var xmlhttp = new XMLHttpRequest();

    //define o que será feito com o dado respondido
    xmlhttp.onreadystatechange = function()
    {
      if (this.readyState == 4 && this.status == 200) 
      {
        document.getElementById("painel").innerHTML = this.responseText;
      }
    };

    //abre uma requisição para o servidor: listarUsuarios.php
    xmlhttp.open("POST","listarUsuarios.php",true);

    //envia a requisição
    xmlhttp.send();
  }
  */
  </script>

  <footer id="myFooter">
    <div class="w3-container w3-theme-l2 w3-padding-32">
      <h4>Footer</h4>
    </div>

    <div class="w3-container w3-theme-l1">
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>
  </footer>

<!-- END MAIN -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>
