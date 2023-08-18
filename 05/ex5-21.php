<?php
// time() : 타임스탬프로된 현재 날짜와 시간을 구하는 함수
// * timestamp : 1970년 1월 1일 0시 0분 0초를 기준으로 일시를 초 단위로 표시하는 방식

    $timestamp = time();
    echo "현재 시간 타임스탬프 : ".$timestamp."<br>";

    echo "현재 시간 : ".date("Y-m-d H:i:s", $timestamp);
?>