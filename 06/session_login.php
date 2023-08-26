<?php
// 로그인 처리를 위해 세션 등록

    session_start(); // 세션 시작

    // userid 세션과 username 세션 등록
    $_SESSION["userid"] = "hong123";
    $_SESSION["username"] = "홍길동";
    
    // 자바스크립트 location.href를 이용해 session_page.php로 페이지 이동
    echo "<script>
            location.href = 'session_page.php';
        </script>";
?>