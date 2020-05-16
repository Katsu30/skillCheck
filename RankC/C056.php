<?php
// 自分の得意な言語で
// Let's チャレンジ！！

/* switch文を試す前はif文でやっていたが、
マイナス点になってしまうことを考慮していなかったのでうまくいかなかった。
そのため、$averageの条件分けをswitch文で行い、そこからifでの条件分けをした*/

$input = explode(" ", fgets(STDIN));
$count = $input[0];
$average = $input[1];

for ($i = 1; $i <= $count; $i++) {
  $input2 = explode(" ", fgets(STDIN));
  $points = $input2[0];
  $absent = $input2[1];

  switch ($average) {
    case ($average == 0):
      echo $i . "\n";
      continue;
    case ($average > 0):
      if ($points - ($absent * 5) >= $average) {
        echo $i . "\n";
      }
      continue;
  }
}
