<?php
// 自分の得意な言語で
// Let's チャレンジ！！

$times = explode(" ", fgets(STDIN));
$count = fgets(STDIN);
for ($i = 0; $i < $count; $i++) {
  $time[$i] = explode(" ", fgets(STDIN));
}
$ok = 0;

for ($i = 0; $i < $count; $i++) {
  // 全て分単位で計算をする
  $arrive = $time[$i][0] * 60 + $time[$i][1];

  $limit = $arrive;
  $limit += $times[1];
  $limit += $times[2];
  // 60 * 9 = 540 つまり、09:00
  if ($limit < 540) {
    // ９時までに出勤可能な時間を$okに入力
    $answer = $arrive - $times[0];
  } else {
    break;
  }
}
// printfでフォーマットを指定して出力する
// %02dで「10進数で2桁」の指定
// 引数にそれぞれの値に代入される数字をいれる → 時間の表示になる
printf("%02d:%02d\n", floor($answer / 60), $answer % 60);
