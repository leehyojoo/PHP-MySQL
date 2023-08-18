<?php
// strlen() : 문자열의 길이를 구하는 데 사용

    $str = "PHP is fun!";
    echo strlen($str)."<br>";

    $str2 = "거북이";
    echo strlen($str2); // 9 (한글 한 글자는 UTF-8 문자셋에서 3바이트로 구성됨)
?>