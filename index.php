<?php

require_once 'vendor/autoload.php';

// $produto = new \App\Model\Produto();

// $produto->setId(5);
// $produto->setNome('Cadeira de Rodas');
// $produto->setDescricao('Microfone Condensador');

$produtoDao = new \App\Model\ProdutoDao();
$produtoDao->delete(5);
// $produtoDao->update($produto);
// $produtoDao->create($produto);
$produtoDao->read();
// var_dump($produtoDao->read());

foreach($produtoDao->read() as $produto):
    echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;

