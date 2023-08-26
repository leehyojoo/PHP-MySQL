<?php
// 특정 페이지에서 $_SESSION 변수에 접근하는 방법

    session_start();  // session_start() 함수 통해 세션 시작
    
    if(isset($_SESSION["username"])){  // isset($_SESSION["username"])은 $_SESSION["username"]값이 존재 하면 True, 그렇지 않으면 False 반환
        echo $_SESSION["username"]."님 환영합니다.";
    } 
    else {
        echo "username 세션이 존재하지 않습니다!";
    }
?>