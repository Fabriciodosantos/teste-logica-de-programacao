<?php

function reverterString($string){
    for($i=strlen($string)-1, $j=0; $j<$i; $i--, $j++) 
    {
        $temp = $string[$i];
        $string[$i] = $string[$j];
        $string[$j] = $temp;
    }
    return $string;
}
  