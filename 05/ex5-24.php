<?php
/*
CSV(Comma-Seperated Value)파일은 각각의 데이터가 콤마로 구분되어 있는 텍스트 파일을 의미함!
- CSV 파일의 첫 번째 줄에는 각 열의 제목이 저장되고, 그 다음 줄 부터 콤마로 구분된 데이터들이 들어감
 */

    $file = fopen("data.csv","r"); // fopen 함수로 data.csv 파일을 읽기 모드로 열어 $file에 저장
    $header = fgetcsv($file);
    // fgetcsv() 함수는 csv 파일에서 한 줄의 데이터를 배열로 읽어옴
    $num = count($header); // count($header)는 $header 배열 요소의 개수를 읽어옴
    echo "<h3>5명 학생의 ".$num."과목 합계/평균 구하기</h3>";

    while(!feof($file)) {
        $sum = 0;
        $line = fgetcsv($file); // 한 줄의 성적 데이터를 읽어 $line 배열에 저장함
        foreach ($line as $v) {
            $sum += $v;
        }
        $avg = round($sum/3, 2); // 소수점 둘째 자리까지 값을 구하여 $avg에 저장
        echo "합계: ".$sum.", 평균: ".$avg."<br>";
    }

    fclose($file); // fclose()을 이용하여 $file, 즉 열었던 data.csv 파일을 닫음
?>