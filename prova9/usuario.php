<?php

class Usuario
{
    private $id_user;
    private $email;
    private $senha;
    private $nome;

    public function __construct($id_user, $email, $senha, $nome)
    {
        $this->id_user = $id_user;
        $this->email = $email;
        $this->senha = $senha;
        $this->nome = $nome;
    }

    public function getId(){ return $this->id_user; }
    public function getEmail(){ return $this->email; }
    public function getSenha(){ return $this->senha; }
    public function getNome(){ return $this->nome; }
    
}

?>

