<?php
//inclui a conexão
include "prova9/database.php";
include "prova9/usuarioDAO.php";

//atribui os valors do form para variáveis
$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];
$senha = password_hash($senha, PASSWORD_DEFAULT);
$nome = $_REQUEST['nome'];

//cria o banco de dados
$database = new Database();
$databasec = $database->getConnection();

//cria usuario com os dados do form
$usuario = new Usuario(null, $email, $senha, $nome);

//Cria acesso ao bd para usuario
$usuarioDAO = new usuarioDAO($database);



//monta a consulta na conexão
$consulta_user = $databasec->prepare("SELECT * FROM user WHERE email = :email");
$consulta_user->bindParam(":email", $email);
try
{
    //executa a consulta
    $consulta_user->execute();
    //verifica o resultado
    $user = $consulta_user->fetch();
    if($user)
    {
        echo "Usuário Já cadastrado";
        exit;
    }
    else
    {
        //hash para a senha
/*
        //consulta para inserir
        $consulta_insere_user = $conexao->prepare("INSERT INTO user (id_user, email, password, admin, name) VALUES (NULL, :email, :senha, '0', :nome)"); 
        // vai ter de utilizar meu banco de dados pois no do paperlaria vai dar erro!! por causa da linha acima
        $consulta_insere_user->bindParam(":email", $email);
        $consulta_insere_user->bindParam(":senha", $senha);
        $consulta_insere_user->bindParam(":nome", $nome); */

        //exexuta a consulta SQL
        if($usuarioDAO->insert($usuario))
        {
            //mensagem de ok
            echo "Usuário Cadastrado com sucesso";
                  exit;
        }
        else
        {
            //mensagem de erro
            echo "Não foi possível Cadastrar";
                exit;
        }
    }
}
catch(PDOException $e)
{
    echo "Não foi possível Cadastrar";
}

//Fecha a conexão
$conexao = null;

?>