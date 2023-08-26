<?php
// set_cookie.php에서 설정한 username 쿠키에 접근하는 방법

// $_COOKIE["username"] : username 쿠키의 값
// isset() : 변수 값이 존재하는 지 체크하는 함수

// $_COOKIE는 쿠키에 사용되는 전역 변수로 해당 쿠키 값에 접근하는 데 사용됨
    if(isset($_COOKIE["username"])){
        echo $_COOKIE["username"]."님 환영합니다.";
    } 
    else {
        echo "username 쿠키가 존재하지 않습니다.";
    }
?>