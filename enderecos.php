<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Petropolis','Bairro Qualquer','Uma Rua','71B');
$outroEndereco = new Endereco('Rio','Centro','Uma Rua Ai','50');

echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;