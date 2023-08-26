<?php
// set_cookie.php에서 설정한 username 쿠키를 삭제하는 방법
    setcookie("username", "", time()-3600);      // 쿠키 삭제
/*
- setcookie() 함수 사용 시 username 쿠키의 값을 NULL("")로 설정하면 username 쿠키가 삭제됨
- 만료일은 현재 이전 시간으로 설정, time()-3600은 현재 시간 1시간 전으로 만료 일을 설정
 */

    echo "쿠키 삭제 완료!";
?>