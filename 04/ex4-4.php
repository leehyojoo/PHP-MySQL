<?php
// 사용자 함수
    function hello() {                  // 함수 정의   -> 서브 루틴
        for ($i=1; $i<=3; $i++)
            echo ("안녕하세요.");
    }

    hello();                            // 함수 호출  -> 메인 루틴
    echo "<br>";
    hello();                            // 함수 호출
    echo "<br>";
    hello();                            // 함수 호출
    echo "<br>";    
?>