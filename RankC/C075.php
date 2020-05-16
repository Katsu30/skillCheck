<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！
    // https://paiza.jp/career/challenges/359/page/result

    $input = explode( " ", fgets( STDIN ) );
    $budget = $input[0];
    $times = $input[1];
    $point = 0;

    for($i = 1; $i <= $times; $i++) {
        $price = fgets( STDIN );

        if($point >= $price) {
            $point -= $price;
        } else {
            $budget -= $price;
            $point += $price * 0.1;
        }
        echo $budget .' ' .$point ."\n";
    }

?>