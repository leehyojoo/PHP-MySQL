<?php
// fwrite() : 텍스트 파일에 데이터를 저장하는 함수

    $file = fopen("hello2.txt","w"); // fopen() 함수로 hello2.txt 파일을 쓰기 모드로 열어 $file에 저장
    
    $str = "만나서 반갑습니다.";
    fwrite($file, $str);

    echo "파일쓰기 완료!";
    fclose($file);
?>