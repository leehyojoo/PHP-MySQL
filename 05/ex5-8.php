<?php
// explode() : 특정 문자를 기준으로 문자열을 쪼갠 후 배열에 저장
    $tel = "010-1234-5678";
    $arr = explode("-", $tel);
    // 문자열 $tel을 '-'를 기준으로 분리하여 배열로는 반환함
    // 따라서 $arr는 $arr[0],$arr[1],$arr[2]로 구성되어 있을 것

    $tel2 = $arr[0].$arr[1].$arr[2];
    echo $tel2;    
?>