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
<header class="w3-container w3-red w3-center" style="background-image: url(RocketKids.jpg); background-repeat: no-repeat; background-size: cover; padding:128px 16px" >

  <h1 class="w3-margin w3-jumbo">RocketKids</h1>
  <p class="w3-xlarge">Introduzindo jovens a informática desde cedo</p>
</header>

<!-- Primeira Grade -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Quem somos?</h1>
      <h5 class="w3-padding-32">Nós somos a escola RocketKids, tendo uma equipe de profissionais qualificados e com especializações em cada área. Nossa equipe conta com 2 professores
        com mestrado na UFMG em ciência da computação, 1 especialista em pedagogia e 1 psicóloga formada em Cambridge.
      </h5>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-rocket w3-padding-64 w3-text-red" style="font-size:150px"></i>
    </div>
  </div>
</div>

<!-- Segunda Grade -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-terminal w3-padding-64 w3-text-red w3-margin-right" style="font-size: 150px;"></i>
    </div>

    <div class="w3-twothird">
      <h1>Qual é o nosso objetivo?</h1>
      <h5 class="w3-padding-32"> Na nossa escola buscamos ensinar jovens de 7 à 15 anos a programar desde cedo, com professores que adaptam seu conteúdo da forma adequada para que cada faixa etária aprenda da forma mais simples e correta.</h5>

      <p class="w3-text-grey">Buscamos também guiar mais jovens para essa área, pois a demanda de emprego é alta e com fortes tendências a crescer cada vez mais. Incentivar esses jovens é incentivar um futuro melhor.</p>
    </div>
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
</script>

</body>
</html>
