<?php
// 세션으로 로그아웃 처리

    session_start();

    // userid 세션이 등록되어 있는 경우 unset() 함수를 이용해 세션 해제
    if(isset($_SESSION["userid"])){
        unset($_SESSION["userid"]);
    }
    // username 세션이 등록되어 있는 경우 unset() 함수를 이용해 세션 해제
    if(isset($_SESSION["username"])){
        unset($_SESSION["username"]);
    }    
    
    // 자바스크립트 location.href를 이용해 다시 session_page.php로 이동
    echo "<script>
            location.href = 'session_page.php';
        </script>";
?>