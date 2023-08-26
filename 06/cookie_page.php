<h3>쿠키로 로그인 처리하기</h3>
<?php
    if(!isset($_COOKIE["userid"]))   
        echo "<a href='cookie_login.php'>로그인</a>"; // userid 쿠키가 설정되지 않은 상태에서는 False의 값 가지므로 '로그인' 글자가 화면에 출력될 것
    else 
        echo "<a href='cookie_logout.php'>로그아웃</a>"; // 'userid' 쿠키 설정 후 실행 결과
?>