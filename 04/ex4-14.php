<?php   
// 연관 배열 요소의 키와 값 추출 => foreach문
    $member = array("id"=> "hong77", "pass"=>"12345", "name"=>"홍길동", "age"=>30); 

    // foreach문 : 배열에서만 사용되며, 배열 요소의 키와 값을 반복해서 읽음
    // 1. foreach($array as $key);
    // 2. foreach($array as $key => $value);
    foreach($member as $key=>$value) {
        echo "키 : ".$key.", 값 : ".$value;
        echo "<br>";
    }
?> 