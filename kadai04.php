<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function sum($double){
    $result = $double * 2 ;
    return $result ;
}
echo sum(100);

//2.$a と $b を仮引数に持ち、$a と $b を足した結果を返す関数を作成してください

function sum($a, $b){
    return $a + $b ;
}

echo sum(1, 2) ."\n" ;

/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を
渡すとその要素をすべてかけた結果を返す関数を作成してください*/

function kakeru($arr) {
    $result = 1;
    foreach($arr as $a) {
        $result *= $a;
    }
    return $result;
}
echo kakeru(array(1, 3, 5, 7, 9));

/*4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。
途中の部分を完成させてください*/

//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

//strip_tags

//array_push

//array_merge

//time, mktime

//date




