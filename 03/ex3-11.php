<?php
// while문으로 5의 배수 합계 출력
   	$x = 1;
    $sum = 0;

    while ($x <= 100) {
        if ($x%5 == 0)        // 5로 나눈나머지가 0일 때만 sum에 더함 -> 5의 배수
            $sum += $x;       // $sum = $sum + $x와 동일
        $x++;
    }

    echo "5의 배수 합계 : ".$sum;
?>