<?php

require 'array-faturamento.php';
require 'funcoes.php';

$faturamentoTotal = calcularTotal($faturamentoPorEstado);

echo "O faturamento total mensal da distribuidora foi de: R$$faturamentoTotal" . PHP_EOL . PHP_EOL;

echo "O percentual de representação que cada estado teve dentro do valor total mensal da distribuidora foram:" .PHP_EOL;
porcentualMensal ($faturamentoPorEstado, $faturamentoTotal);



