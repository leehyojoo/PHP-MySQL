<?php
// 배열로 합계와 평균 구하기
    $score = array(75, 85, 93, 87, 92);

    $length = count($score); 
    // count()는 배열 $score의 요소 개수, 즉 5의 값을 반환 함
    $sum = 0; // 누적 합계 sum을 0으로 초기화

    for ($i=0; $i<$length; $i++)
        $sum += $score[$i];

    $avg = $sum/$length;

    echo "합계 : ".$sum."<br>";
    echo "평균 : ".$avg;
?>