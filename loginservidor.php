<?php
//inclui a conexão
include "conexao.php";

//se não vier e-mail redireciona para index.php
if(!isset($_REQUEST['email']))
{
    header("Location:index.php");
    exit;
}    

//pega dados do e-mail
$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];

//monta consulta preparada
$consulta_user = $conexao->prepare("SELECT * FROM user WHERE email = :email");
$consulta_user->bindParam(':email', $email);

//executa a consulta
$consulta_user->execute();

//atribui o registro retornado para $user
$user = $consulta_user->fetch();

if($user)
{
    if(password_verify($senha, $user['password']))
    {
        session_start();
        $_SESSION['nome'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        if($user['type'] == 1)
            header('Location:homeAdmin.php');
        else
            header('Location:home.php');
    }
    else
    {
        echo "<script>
                alert('Senha incorreta!');
                window.location.href='login.php';
            </script>";
            exit;
    }    
}
else
{
    echo "<script>
            alert('usuário não cadastrado!');
            window.location.href='cadastro1.php';
          </script>";
          exit;
}

//fecha conexao
$conexao = null;

?>