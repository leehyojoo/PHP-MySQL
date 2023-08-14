<?php
// 매개변수 : 호출하는 함수 측에서 특정 값을 정의 함수에 전달
    function plus($a, $b) {
        $c = $a + $b;
        echo $c."<br>";
    }

    plus(10, 20);
    plus(100, 200);    
?>