<?php 
// 2차원 배열로 성적 합계와 평균 구하기

    $score = array(array(88, 98, 96, 77, 98), 
                array(86, 77, 86, 84, 95),
                array(84, 83, 95, 86, 93));

    for ($i=0; $i<3; $i++) {
        $sum=0;                 // i+1번째 학생의 점수 합계 초기화
       	for($j=0; $j<5; $j++)
	        $sum += $score[$i][$j];         
         
       	$avg = $sum/5;
       	$number = $i + 1;
       	
        echo($number."번 학생의 합계 : ".$sum.", 평균 : ".$avg."<br>");
    }
?>
