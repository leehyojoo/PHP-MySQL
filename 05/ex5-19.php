<?php
// array_sum() : 배열의 요소 합계를 구하는 함수
    $score = array(93, 85, 93, 77, 100);

    $sum = array_sum($score);
    $avg = $sum/count($score);

    echo "합계 : ".$sum."<br>";
    echo "평균 : ".$avg;
?>