<?php
// 매개변수로 정수의 합 구하기
    function hap($n) {  // hap($n) : 1에서 n까지의 정수 합을 구해서 출력하는 역할
        $sum = 0;
        for ($i=1; $i<=$n; $i++)
            $sum += $i;

        echo $sum."<br>";
    }

    hap(10);
    hap(100);
?>