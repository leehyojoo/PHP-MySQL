<?php   
// 연관배열(Associative Array)에서는 index대신 Key를 사용함

    $member = array("id"=> "hong77", "pass"=>"12345", "name"=>"홍길동", "age"=>30); 

    // 연관 배열에 ㅇㅆ는 요소 값을 읽을 때는 $array["key"] = "Value" 
    echo "아이디 : ".$member["id"]."<br>";
    echo "비밀번호 : ".$member["pass"]."<br>";
    echo "이름 : ".$member["name"]."<br>";
    echo "나이 : ".$member["age"];
?> 