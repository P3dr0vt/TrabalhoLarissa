<?php

class Projeto
{
    private $id;
    private $title;
    private $descricao;

    public function __construct($id, $title, $descricao)
    {
        $this->id = $id;
        $this->title = $title;
        $this->descricao = $descricao;
    }

    public function getId(){ return $this->$id; }
    public function getTitle(){ return $this->$title; }
    public function getDesc(){ return $this->$descricao; }
    
    
}

?>

