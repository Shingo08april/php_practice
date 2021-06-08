<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($double){
    $result = $double * 2 ;
    return $result ;
}
echo sum(100);

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください

function sum($a, $b){
    return $a + $b ;
}

echo sum(1, 2) ."\n" ;
