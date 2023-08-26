<?php
// 등록된 세션 해제하는 방법

    session_start();
 
    // 세션 접속 끊기
    // username 세션의 값이 존재하면 unset() 함수를 이용해서 세션 해제
    if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
    }

    echo "세션 접속 해제!";
?>