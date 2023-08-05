<?php
// 다이어트 필요 유무 판정(if~ else~ 구문)
   $height = 170;                // 키
   $weight = 40;                 // 몸무게
   $s = ($height-100)*0.9;       // 표준 체줄

   echo ("키 : $height <br>");
   echo ("몸무게 : $weight <br>");

    if ($weight>$s)             // if와 else에 속하는 문장이 하나일 경우에는 중괄호 생략 가능
        echo ("다이어트 필요.");
    else 
        echo ("다이어트 불필요.");
?>