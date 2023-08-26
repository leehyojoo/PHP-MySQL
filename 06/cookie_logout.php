<?php
    // 쿠키 삭제
    setcookie("userid", "", time() - 3600);
    
    echo "<script>
            location.href = 'cookie_page.php';
        </script>";
        // userid 쿠키가 삭제되었기 때문에 cookie_page.php의 userid는 Null값을 가지므로 "로그인" 글자가 화면에 출력될 것
?>