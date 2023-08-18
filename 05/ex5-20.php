<?php
// date() : 날짜와 시간을 특정 포맷의 문자열로 만드는 함수
// date 함수는 서버 컴퓨터의 로컬 시간을 기준으로 날짜와 시간을 특정 포맷의 문자열을 반환

    $today = date("Y년 m월 d일");
    echo "오늘은 ".$today." 입니다.<br>";

    echo date("Y-m-d")."<br>";
    echo date("Y.m.d")."<br>";
    echo date("Y-m-d H:i:s"); 
?>