<?php
// <table> 태그로 섭씨/화씨 환산표 출력

/*
 <table> </table>

 - <th> </th> : table head, 표의 제목
 - <tr> </tr> : table row, 표의 행(가로줄)
 - <td> </내용> : table data, 셀

 - <table>태그와 함께 사용가능한 속성 : colspan, rowspan, border, width, height, cellpadding, cellsapcing 등
 */
    echo "<table border='1'>";
    echo "<tr><th width='100'>섭씨</th><th width='100'>화씨</th>";

    for ($c=-10; $c<= 30; $c+=5) {
        $f = ($c * 9/5) + 32;       // $f : 화씨
        echo "<tr><th>$c</th><th>$f</th>";
    }
    echo "</table>"; 
?>