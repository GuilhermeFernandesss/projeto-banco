<?php

require_once 'autoload.php';
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Modelo\Funcionario\{Funcionario,Gerente,Diretor,Desenvolvedor,EditorVideo};

$umDiretor = new Diretor('Joao Paulo', new CPF ('154.554.885-54'),15000);
$umFuncionario = new Desenvolvedor('Guilherme Fernandes', new CPF ('409.518.409-60'), 1600);
$umFuncionario->sobeDeNivel();
$umaFuncionaria = new Gerente('Patricia', new CPF('123.456.789-10'), 3000);
$umEditor = new EditorVideo('Pedro',new CPF('141.558.487-85'),1700);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();