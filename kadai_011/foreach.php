<?php
$vegetable_date = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];

// 配列$vegetable_dateのキーと値を1つずつ順番に出力する
foreach ($vegetable_date as $key => $value) {
  echo "{$key}:{$value} <br>";
}