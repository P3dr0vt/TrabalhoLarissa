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
  <p class="w3-xlarge">Entre com os dados para fazer login</p>
</header>

<!-- Grade principal -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
    </div>
    <form action="loginservidor.php" method="post" class="w3-container">
       <p>Email:<input class="w3-input w3-border"  type="email" name="email"></p>
       <p>Senha: <input class="w3-input w3-border"  type="password" name="senha" id="senha">
        
       <!--<br>
        <button type='button'onclick="escreve('1')">1</button>
        <button type='button'onclick="escreve('2')">2</button>
        <button type='button'onclick="escreve('3')">3</button>  <br>

        <button type='button'onclick="escreve('4')">4</button>
        <button type='button'onclick="escreve('5')">5</button>
        <button type='button'onclick="escreve('6')">6</button>  <br>

        <button type='button'onclick="escreve('7')">7</button>
        <button type='button'onclick="escreve('8')">8</button>
        <button type='button'onclick="escreve('9')">9</button>    <br>
        <button type='button'onclick="apaga('*')">*</button>
        <button type='button'onclick="escreve('0')">0</button>
        <button type='button'onclick="backspace('<')"><</button> 
   -->
        
      </p>
       <p><input class="w3-button w3-white w3-border w3-border-red w3-round-large"  type="submit" value="Login"></p>
    </form>
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
  //Código da prova 26/04
/*
  function apaga()
            {
                document.getElementById("senha").value = "";
            }

            function escreve(n)
            {
                document.getElementById("senha").value += n;
            }

            function backspace() 
             {
                            var campo = document.getElementById("senha");
                            var valorCampo = campo.value;
                            var novoValorCampo = valorCampo.substring(0, valorCampo.length - 1);
                            campo.value = novoValorCampo;
            }            
*/
</script>

</body>
</html>
