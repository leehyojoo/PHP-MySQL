<?php
// strlen()과 str_replace 함수 => 내장 함수
    $string = "php is fun.";

    $length = strlen($string); // 문자열의 길이 
    echo $length."<br>";

    $string2 = str_replace("php", "PHP", $string); // 특정 문자열을 치환
    // $string, 즉 'php is fun'에서 'php'를 'PHP'로 치환함
    echo $string2."<br>";
?>