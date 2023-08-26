<h3>세션으로 로그인 처리하기</h3>
<?php
// 세션을 이용하여 로그인 처리

    session_start();

    if(!isset($_SESSION["userid"]))    // 세션이 등록되어 있지 않다면 $_SESSION["userid"]는 Null 값을 가지므로 True가 됨
        echo "<a href='session_login.php'>로그인</a>"; // 세션이 등록되어 있지 않은 경우 -> '로그인' 글자가 출력됨
    else 
        echo $_SESSION["username"]."님"." | <a href='session_logout.php'>로그아웃</a>" // 세션이 등록되어 있는 경우 -> '로그아웃' 글자가 출력됨
?>