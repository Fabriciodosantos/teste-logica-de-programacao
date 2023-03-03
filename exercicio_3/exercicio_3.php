<?php

require 'array-faturamento-diario.php';

$valorMaior = $faturamentoDiario[0]['valor'];
$valorMenor = $faturamentoDiario[0]['valor'];
$totalDosFaturamentos = 0;
$diasComFaturamento = 0;

foreach ($faturamentoDiario as $key => $dia) {
	if ($dia['valor'] > $valorMenor ) {
		$valorMaior = $dia['valor'];
	}

	if ($dia['valor'] < $valorMaior && $dia['valor'] > 0) {
		$valorMenor = $dia['valor'];
	}

	if ($dia['valor'] > 0) {
		$totalDosFaturamentos += $dia['valor'];
		$diasComFaturamento += 1;
	}
}

$mediaMensal = $totalDosFaturamentos / $diasComFaturamento;
$diasComFaturamentoMaiorQueAMedia = 0;

foreach ($faturamentoDiario as $key => $dia) {
	if ($dia['valor'] > $mediaMensal){
		$diasComFaturamentoMaiorQueAMedia += 1;
	}
}

echo " O menor faturamento ocorrido em um dia do mês foi de R$ $valorMenor " . PHP_EOL ;

echo " O maior faturamento ocorrido em um dia do mês foi de R$ $valorMaior " . PHP_EOL;

echo " A média mensal é de R$ $mediaMensal " . PHP_EOL;

echo " Durante o mês por $diasComFaturamentoMaiorQueAMedia dias, o faturamento foi maior que a média mensal.";



