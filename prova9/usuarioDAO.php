<?php

include "prova9/usuario.php";

class usuarioDAO
{
    private $connection = null;

    public function __construct(Database $db)
    {
        $this->connection = $db->getConnection();
    }
    
    public function insert(Usuario $usuario)
    {
        $id_usuario = $usuario->getId();
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();
        $nome = $usuario->getNome();
        //monta a consulta na conexão
        $consulta_usuario = $this->connection->prepare("INSERT INTO user (id_user, email, password, type, name) VALUES (NULL, :email, :senha, '0', :nome)");
        $consulta_usuario->bindParam(":email", $email);
        $consulta_usuario->bindParam(":senha", $senha);
        $consulta_usuario->bindParam(":nome", $nome);
        //exexuta a consulta SQL
        if($consulta_usuario->execute())
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}

?>