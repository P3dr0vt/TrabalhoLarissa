<?php

include "prova10/projeto.php";

class ProjetoDAO
{
    private $connection = null;

    public function __construct(Database $db)
    {
        $this->connection = $db->getConnection();
    }
    
    public function insert(Projeto $projeto)
    {
        $id = $projeto->getId();
        $desc = $projeto->getDesc();
        $title = $projeto->getTitle();
        //monta a consulta na conexão
        $consulta_usuario = $this->connection->prepare("INSERT INTO projeto (id, title, descricao) VALUES (NULL, :title, :desc)");
        $consulta_usuario->bindParam(":title", $title);
        $consulta_usuario->bindParam(":id", $id);
        $consulta_usuario->bindParam(":desc", $desc);
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