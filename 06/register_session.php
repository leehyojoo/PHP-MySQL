<?php
// 세션 등록하기

    // 세션을 사용하는 모든 페이지에서 session_start()를 실행하여야 함
    session_start();    // session_start() 함수 통해 세션 시작
    $_SESSION["username"] = "홍길동";  // 전역 변수 $_SESSION을 이용해 unsername 세션에 '홍길동'을 등록함

    echo "세션 등록!";
?>