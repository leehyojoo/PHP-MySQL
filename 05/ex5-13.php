<?php
// substr() : 문자열에서 특정 문자열을 분리
// substr($str, i, n) : 인덱스 i부터 n개의 문자열을 반환

    $str = "2022-03-25 21:30:50";

    $year = substr($str, 0, 4);
    $month = substr($str, 5, 2);
    $day = substr($str, 8, 2);
    $time = substr($str, 11);    

    echo $year."년<br>";
    echo $month."월<br>";
    echo $day."일<br>";
    echo $time;
?>