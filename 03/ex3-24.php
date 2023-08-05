<?php
// *로 역삼각형 형태 출력
    for ($i=1; $i<=9; $i++) {
        for ($j=1; $j<=9-$i; $j++) {
            echo "&nbsp;";  // 공백을 나타내는 특수문자(&nbsp;)를 9-$i번 출력
        }
        for ($j=1; $j<=$i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>