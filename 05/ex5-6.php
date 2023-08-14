<?php
// htmlspecialchars() : 
    $str = "<h3>MySQL은 PHP와 같이 많이 사용된다.</h3>";
    echo $str;
    // echo문에서 사용된 HTML 태그(<h3>)는 웹 페이지에 그대로 반영됨

    $str2 = htmlspecialchars($str);
    echo $str2;
    // 따라서 '<h3>'~</h3>'을 화면에 그대로 출력하려면 특수 기호들을 HTML 표기로 변환하여야 함 => htmlspecialchars() 함수의 역할
?>