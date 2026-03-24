<?php
// 生徒の点数
$scores = [80, 60, 55, 40, 100, 25, 80, 95, 30, 60];

// 合計を計算
$total = array_sum($scores);

// 人数
$count = count($scores);

// 平均点
$average = $total / $count;

// 結果を出力
echo  $average ;
?>