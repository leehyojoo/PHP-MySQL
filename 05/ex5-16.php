<?php
// array_push() : 배열 제일 뒤에 요소를 추가하는 함수

    $animal = array("사자", "호랑이", "사슴", "여우");

    array_push($animal, "팽귄");
    array_push($animal, "코뿔소");
    print_r($animal);
    
    /*
    print_r() 함수는 변수의 값을 확인하는 데 사용되는 함수
    + 배열과 같은 데이터 형의 구조와 내용을 쉽게 볼 수 있음
    */
?>