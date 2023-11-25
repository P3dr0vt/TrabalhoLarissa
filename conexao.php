<?php

try {
    // Conexão PDO
    $conexao = new PDO("mysql:host=localhost;dbname=rocketkids", 'root', '');

    // Configura o PDO para lançar exceções em caso de erros
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
    // Em caso de erro, exibe a mensagem de erro
    die("ERRO: Não foi possível conectar ao BD! " . $erro->getMessage());
}

?>
