<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Escola RocketKids</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
</head>
<body>
<script src="js/jQuery/jquery-3.5.1.min.js"></script>
<script src="js/script.js"></script>
<!-- Barra de navegação -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="index1.php" class="w3-bar-item w3-button w3-padding-large w3-white">Início</a>
    <a href="contato1.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Contatos</a>
    <a href="cadastro1.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Cadastro</a>
    <a href="login.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Login</a>
  </div>

<!-- Barra de navegação responsiva -->
<div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="contato1.php" class="w3-bar-item w3-button w3-padding-large">Contatos</a>
    <a href="cadastro1.php" class="w3-bar-item w3-button w3-padding-large">Cadastro</a>
    <a href="login.php" class="w3-bar-item w3-button w3-padding-large">Login</a>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding: 48px;">
  <p class="w3-xlarge">Cadastre-se abaixo</p>
</header>

<!-- Grade principal -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
    </div>
    <form id="form1"class="w3-container">
        <p>Nome Completo: <input class="w3-input w3-border"  type="text" id="nome" name="nome" ></p>
       <p>Email:<input class="w3-input w3-border"  type="email" name="email" id="email" ></p>
       <p>Senha: <input class="w3-input w3-border"  type="password" name="senha" id="senha"></p>
      <p>Confirmar Senha: <input class="w3-input w3-border"  type="password" name="senha" id="senhaconfirmar"></p>
       <p><input class="w3-check w3-border"  type="checkbox" name="termos" > Você concorda com os termos e condições do contrato?</p>
       <p><input class="w3-check w3-border"  type="checkbox" name="spam"> Deseja receber promoções e notícias?</p>
       <p><input class="w3-button w3-white w3-border w3-border-red w3-round-large" id="bottopaulo" type="button" value="Cadastrar"></p>

    </form>
    <div id="mensagem"></div>
  </div>
</div>


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
 </div>
 <p>Todos os direitos reservado à <a href="index1.html" target="_blank">RocketKids</a></p>
</footer>

<script>
// Menu funcional para smartphone
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}


// Código prova 26/04
function validar(){
  var senha = document.getElementById("senha") , senha2 = document.getElementById("senhaconfirmar");
  if(senha.value != senha2.value) {
    alert("Senhas diferentes!");
  } else {
    document.getElementById("form1").submit();
  }
}
$(document).ready(function(e)
{
  $("#bottopaulo").click(function(){
    $.post("cadastroservidor.php" ,$("#form1").serialize(),function(data){
      $("#mensagem").html(data);
      $("#nome").val("");
$("#email").val("");
$("#senha").val("");
$("#senhaconfirmar").val("");
});
});
});



 
</script>

</body>
</html>
