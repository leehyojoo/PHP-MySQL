<?php
// MySQL 서버 접속

/*
mysqli_connect($servername, $username, $password, $dbname) : MySQL 서버 접속을 나타내는 객체를 반환함, 접속 실패 시 False 반환
- $servername : 서버의 IP 주소나 접속 서버명
- $username : MySQL 사용자 계정명
- $password : MySQL 사용자 비밀번호
- $dbname : 사용할 데이터베이스명
 */

 /*
 die(message) : 매개변수로 설정된 메시지를 출력하고 프로그램을 종료함
 -- exit() 함수와 동일한 기능 --
 */

 /*
 mysqli_connect_error() : MySQL 접속 시 발생되는 오류 메시지를 반환함
  */

    $servername = "localhost";          // 서버명
    $username = "user";                 // 사용자명
    $password = "12345";                // 비밀번호
    $dbname = "sample";                 // DB명

    // MySQL 연결하기
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // 연결 체크하기
    if (!$conn) {
        die("연결 오류 : ".mysqli_connect_error());
    }
    
    echo "MySQL에 성공적으로 연결되었습니다!";
?>
