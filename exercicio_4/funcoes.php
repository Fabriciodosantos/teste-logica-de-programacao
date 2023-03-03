<?php

function calcularTotal ($faturaPorEstado)
{
    $faturamentoTotal = 0;

    foreach ($faturaPorEstado as $key => $estado) {
        $faturamentoTotal += $estado['faturamento'];
    }

    return $faturamentoTotal;
}


function porcentualMensal ($faturaPorEstado, $faturamentoTotal)
{
    foreach ($faturaPorEstado as $key => $estado) {
        $porcentual = ($estado['faturamento'] / $faturamentoTotal) * 100;

        echo mb_strtoupper($estado['estado']) . ' -> ' . number_format($porcentual, 2 , '.', ',') . '%' . PHP_EOL;
    }
}
