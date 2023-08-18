<?php
// fopen() : 파일을 읽거나 쓰기 위해 파일을 여는 함수
    $file = fopen("hello.txt","r"); // hellot.txt 파일을 r : 읽기 모드로 열어서 $file에 저장

    /*
    "r" : 읽기 모드, 파일을 읽을 때 사용
    "w" : 쓰기 모드, 파일에 데이터를 저장할 때 사용
    "a" : 추가 모드, 기존 파일에 데이터를 추가할 때 사용
     */

    while(! feof($file)) { // feof() 함수는 연 파일에서 EOF를 체크
        echo fgets($file)."<br>";
        // fgets() : 파일에서 한 줄의 데이터를 반환
        // while문의 조건식이 참, 즉 EOF에 도달할 때까지 반복 수행
    }

    fclose($file); // fclose() : 파일을 닫는데 사용
?>