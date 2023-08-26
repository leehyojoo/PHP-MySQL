<?php
// 로그인 상태를 나타내는 userid 쿠키 설정

    // 24*60*60 = 1일, 30일 후 쿠키 만료 
    // setcookie() 함수를 이용하여 userid 쿠키의 값을 'hong123'으로 설정하고, 이 쿠키는 30일 간 유효함
    setcookie("userid", "hong123", time() + 24*60*60 * 30 );
    

    // javascript location.href를 이용하여 cookie_page.php로 페이지를 이동
    /*
    location.href -> location 객체의 href 속성은 현재 접속 중인 페이지 정보를 담고 있음, 또한 속성 값에 URL 주소를 설정하면 해당 페이지로 이동됨
     */
    echo "<script>
            location.href = 'cookie_page.php';
        </script>";

?>