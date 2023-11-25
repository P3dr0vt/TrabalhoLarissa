<?php

include "sessao.php";
include "prova9/database.php";
include "prova10/projetoDAO.php";

//dados do form
$descricao = $_REQUEST["descricao"];
$title = $_REQUEST["title"];

//cria bd
$database = new Database();

//cria produto com os dados do form
$projeto = new Projeto(null, $descricao, $title);

//cria o acesso ao bd para produto
$projetoDAO = new ProjetoDAO($database);

//insere produto
if($projetoDAO->insert($projeto))
{
    echo "Produto cadastrado com sucesso!";
}
else
{
    echo "'Não foi possível cadastrar";
}

?>