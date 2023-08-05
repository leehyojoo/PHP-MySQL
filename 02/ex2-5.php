<?php      
    $kor = 80;
    $eng = 90;
    $math = 100;

    $sum = $kor + $eng + $math;
    $avg = $sum/3;
    
    echo "국어 : $kor<br>";
    echo "영어 : $eng<br>";
    echo "수학 : $math<br>";
    echo "- 합계 : $sum<br>";
    echo "- 평균 : $avg<br>";

    // echo문 안에 사용된 변수 
    // echo문의 따옴표 안에 $kor, $eng, $math, $sum, $avg 등과 같은 변수가 위치하면 해당 변수의 값 출력
?>