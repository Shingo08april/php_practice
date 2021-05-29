<?php

//kadai1
$a = 3;
$b = 7;
echo $a + $b;


//kadai2
$array_month = ["一月"," 二月", "三月", "四月", "五月", "六月", "七月", "八月", "九月", "十月", "十一月", "十二月"];
echo $array_month[7];

//kadai3
$hello = "hello";
$name = "Shingo";
$world = "'s World";
echo $hello . $name . $world;

//kadai4
$tech_boost = 'tech';
$tech_boost .= ' boost';
echo $tech_boost;

//kadai5
$calendar_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

// 12月を表示する
echo $calendar_2018[December];
//①変数名が2018という数字から始まっている。
//②2月を囲う後ろが「,」ではなく、「、」になっている。
//③10月が「""」で囲えていない。
//④最後の行が一行目と同様に2018という数字から始まっている。


