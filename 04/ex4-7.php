<?php
// return $x;
    function hap($n) {
        $sum = 0;
        for ($i=1; $i<=$n; $i++)
            $sum += $i;

        return $sum; // 함수 값의 반환
    }

    echo "1~10 합계 : ".hap(10)."<br>";
    echo "1~100 합계 : ".hap(100);
?>