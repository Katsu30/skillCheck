<?php
    // 自分の得意な言語で
    // Let's チャレンジ！！

    $input = explode( " ", fgets( STDIN ) );
    $price = $input[0];
    $discount = $input[1];

    // 初期値を設定
    $after_price = $price;
    $total = $price;

    // whileの条件式が逆で戸惑った
    while($after_price > 0){
        $after_price = floor($after_price * (100 - $discount)/100);
        $total += $after_price;
    }

    echo $total;
?>