<?php      
    $x = 'apple';          // 문자열
    $y = "사과";         // 문자열

    var_dump($x);    // string(5) "apple" 
    echo "<br>";
    var_dump($y);   // string(6) "사과" 

    /*  한글 표준 문자셋인 UTF-8에서는 한글 한 글자는 3바이트로 표현됨  */
?>