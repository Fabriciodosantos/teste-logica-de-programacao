<?php
function fibonacci ($n)
{
    $a = 0;
    $b = 1;
    $pertence = false;
    $naoPertence =false;

    for ($i=0; $i <= $n; $i++) { 
        $c = $a + $b;
        $a = $b;
        $b = $c;

        if ($c === $n){
            $pertence = true;
        } else {
            $naoPertence = true;
        }
    }

    if ($pertence){
        return " O número $n pertence a sequencia de fibonacci.";
    } else if ($naoPertence) {
        return "O número $n não pertence a sequencia de fibonacci.";
    }
}
    

echo fibonacci(144);



