<?php
/*
setcookie(string name, string value, int expire)
return : 쿠키 설정이 성공하면 True, 실패 시 False 반환

name : 쿠키명
value : 쿠키명에 설정되는 쿠키 값
expire : 쿠키가 만료되는 일시
 */

    // 24*60*60 = 1일, 30일 후 쿠키 만료 
    setcookie("username", "홍길동", time() + 24*60*60 * 30 );
    // setcookie() 함수를 이용해 쿠키 username에 '홍길동'값을 설정하고, 쿠키는 30일 이후 만료됨
    // 여기서 time()은 현재 시간의 타임 스탬프 값을 반환

    echo "쿠키 설정 완료!";
?>