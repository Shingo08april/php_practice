<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

/*function sum($double){
    $result = $double * 2 ;
    return $result ;
}
echo sum(100);*/ 

//2.$a と $b を仮引数に持ち、$a と $b を足した結果を返す関数を作成してください

function sum($a, $b){
    return $a + $b;
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

/*function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
 
 echo max_array([5, 2, 3, 9, 7]) ."\n" ;
 */

//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

//strip_tags strip_tags — 文字列から HTML および PHP タグを取り除く

$text = '<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo "\n";

echo strip_tags($text, '<p><a>');

//array_push 一つ以上の要素を配列の最後に追加する

$stack = array("orange", "banana");
array_push($stack, "apple", "raspberry");
print_r($stack);

//array_merge ひとつまたは複数の配列をマージする

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
print_r($result);

//time 現在の Unix タイムスタンプを返す

$nextWeek = time() + (7 * 24 * 60 * 60);
                   // 7 日 * 24 時間 * 60 分 * 60 秒
echo 'Now:       '. date('Y-m-d') ."\n";
echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";
// あるいは strtotime() を使用します
echo 'Next Week: '. date('Y-m-d', strtotime('+1 week')) ."\n";

//mktime 日付を Unix のタイムスタンプとして取得する

// デフォルトのタイムゾーンを設定します。
date_default_timezone_set('UTC');

// 出力: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

// 出力例: 2006-04-05T01:02:03+00:00
echo date('c', mktime(1, 2, 3, 4, 5, 2006));

//date ローカルの日付/時刻を書式化する

//使用するデフォルトのタイムゾーンを指定します。
date_default_timezone_set('UTC');


// 結果は、たとえば Monday のようになります。
echo date("l");

// 結果は、たとえば Monday 8th of August 2005 03:12:46 PM のようになります。
echo date('l jS \of F Y h:i:s A');

// 結果は July 1, 2000 is on a Saturday となります。
echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));

/* 書式指定パラメータに、定数を使用します。 */
// 結果は、たとえば Wed, 25 Sep 2013 15:28:57 -0700 のようになります。
echo date(DATE_RFC2822);

// 結果は、たとえば 2000-07-01T00:00:00+00:00 のようになります。
echo date(DATE_ATOM, mktime(0, 0, 0, 7, 1, 2000));

//5.の答えは全てhttps://www.php.net/manual/ja/function.strip-tagsからのコピー&スペースです。




