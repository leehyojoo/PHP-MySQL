# PART 3. 제어문
      
***  
***
***

## 3.1 if문

1. if~ 구문
2. if~ else~ 구문
3. if~ elseif~ else~ 구문

### 3.1.1 if~ 구문

```php
<?php
// if문 : 조건식이 참인 경우에만 if문 안의 문장이 실행

    $age = 30;                  // 나이 : 30세
    $pay = 2500;                // 기본 요금 : 2500원
       
    if ($age >= 65 ) {           // 나이가 65세 이상이면 참
       $pay = 0;
    }

    echo "나이 : ".$age."세<br>";
    echo "요금 : ".$pay."원<br>";
?>
```

* if (조건식) {   
    문장1;   
    문장2;   
}   
> if 안에 있는 문장1, 문장2, ...는 조건식이 참인 경우에만 실행되고, 조건식이 거짓인 경우에는 실행되지 않는다.

```php
<?php
 	$pilgi = 65;
    $silgi = 90;
	$result = "불합격";
             
 	if ($pilgi >= 70 and $silgi >= 70) {     // and == &&
		$result = "합격";
	}

    echo "필기 점수 : ".$pilgi.", 실기점수 : ".$silgi."<br>";
    echo "결과 : ".$result;
?>
```

> + 논리 연산자 and
>   > 두 조건이 모두 참인 경우에만 참이 된다. 달리 말하면 두 조건 중 하나가 거짓이 되면 전체 조건이 거짓이 된다.

### 3.1.2 if~ else~ 구문

* if(조건식) {
    문장1;
    문장2;
}
else{
    문장A;
    문장B;
}
> 조건식이 참이면 if에 속하는 문장1, 문장2가 실행되고, 그렇지 않으면 else에 속하는 문장A, 문장B가 실행된다.

```php
<?php
// if~ else~ 구문
 	$num = 12;
             
 	if ($num%2 == 0) {
		echo $num."은(는) 짝수이다.";
	}
    else {
        echo $num."은(는) 홀수이다.";
    }
?>
```

```php
<?php
// 다이어트 필요 유무 판정(if~ else~ 구문)
   $height = 170;                // 키
   $weight = 40;                 // 몸무게
   $s = ($height-100)*0.9;       // 표준 체중

   echo ("키 : $height <br>");
   echo ("몸무게 : $weight <br>");

    if ($weight>$s)             // if와 else에 속하는 문장이 하나일 경우에는 중괄호 생략 가능
        echo ("다이어트 필요.");
    else 
        echo ("다이어트 불필요.");
?>
```

### 3.1.3 if~elseif~else~ 구문

* if(조건식) {   
    문장1;   
    문장2;   
}   
elseif(조건식2) {   
    문장a;   
    문장b;   
}   
else{   
    문장A;   
    문장B;   
}   

```php
<?php
// 점수에 따라 학점 계산(if~ elseif~ else~ 구문)
    $score = 83;

    if ($score>=95)
        $grade = "A+";
    elseif ($score>=90)
        $grade = "A";
    elseif ($score>=85)
        $grade = "B+";
    elseif ($score>=80)
        $grade = "B";
    elseif ($score>=75)
        $grade = "C+";
    elseif ($score>=70)
        $grade = "C";
    elseif ($score>=65)
        $grade = "D+";
    elseif ($score>=60)
        $grade = "D";
    else 
        $grade = "F";

    echo "입력된 점수 : ".$score."점<br>";
    echo "등급 : ".$grade;
?>
```

***

## 3.2 if문의 중첩

> if의 세 가지 구문들은 각각 단독으로 사용되기도 하지만 경우에 따라서는 여러 개의 구문이 중첩되어 사용됨

```php
<?php
// 만 나이 계산하기 (if문의 중첩)

   	$now_year = 2022;
   	$now_month = 4;
   	$now_day = 15;

   	$birth_year = 2000;
   	$birth_month = 7;
   	$birth_day = 10;

   	if($birth_month < $now_month)  
      	$age= $now_year - $birth_year;
   	else if($birth_month == $now_month)
   	{ 
      	if($birth_day <= $now_day)
         	$age= $now_year - $birth_year;
      	else
         	$age= $now_year - $birth_year-1;
   	} 
   	else
      	$age= $now_year - $birth_year-1;

   	echo "오늘 날짜 : ".$now_year."/".$now_month."/".$now_day."<br>";
   	echo "출생년월일 : ".$birth_year."/".$birth_month."/".$birth_day."<br>";
   	echo "만 나이 : ".$age."세";
?>
```

## 3.3 switch문

* switch (변수) {    
    case 값1 :   
            문장1;   
            문장2;   
            break;   
    case 값2 :   
            문장A;   
            문장B;   
            break;   
    default :   
            문장a;   
            문장b;   
}   

```php
<?php
//switch문
   	$my_color = "노랑";

    switch($my_color) {
        case "빨강" :
            echo "나는 ".$my_color."을 좋아합니다.";
            break;       // break를 통해 switch문 벗어남
        case "노랑" :
            echo "나는 ".$my_color."을 좋아합니다.";
            break;
        case "파랑" :    
            echo "나는 ".$my_color."을 좋아합니다.";
            break;
        default :
            echo $my_color."은(는) 내가 좋아하는 색상이 아닙니다.";
    }
?>
```

## 3.4 while문

### 3.4.1 while문의 기본 구조

* while(조건식) {      
    문장1;     
    문장2;    
}    

> while의 조건식이 참인 동안 문장1, 문장2를 반복실행함.      
> 반복 루프가 진행되는 동안 조건식의 거짓이 되는 순간 while문을 빠져나감.

```php
<?php
// while문
   	$x = 1;

    while ($x <= 5) {
        echo "안녕하세요.<br>"; // 5번 출력
        $x++;
    }
?>
```

### 3.4.2 while문으로 합계 구하기

```php
<?php
// while문으로 정수 출력
   	$x = 1;

    while ($x <= 10) {
        echo $x."<br>"; // 10까지 출력될 것
        $x++;
    }
?>
```

```php
<?php
//while문으로 정수 합계 출력
   	$x = 1;
    $sum = 0;    // 합계를 나타내는 변수 $sum을 0으로 초기화

    while ($x <= 100) {
        $sum += $x;              // $sum = $sum + $x와 동일
        $x++;
    }

    echo "합계 : ".$sum;      // 1에서 100까지의 합인 5050이 출력
?>
```

```php
<?php
// while문으로 5의 배수 합계 출력
   	$x = 1;
    $sum = 0;

    while ($x <= 100) {
        if ($x%5 == 0)        // 5로 나눈나머지가 0일 때만 sum에 더함 -> 5의 배수
            $sum += $x;       // $sum = $sum + $x와 동일
        $x++;
    }

    echo "5의 배수 합계 : ".$sum;
?>
```

### 3.4.3 마일/킬로미터 환산표 만들기

> 킬로미터 = 마일 x 1.609344

```php
<?php
// while문으로 마일/킬로미터 환산
    echo "-------------------<br>";
    echo "마일 킬로미터<br>";
    echo "-------------------<br>";

    $mile = 10;
    while ($mile <= 50) {
        $km = $mile * 1.609344;
        $km = round($km, 2);      // round()함수는 실수를 반올림한 값을 반환
        echo $mile." &nbsp; ".$km."<br>";   // " &nbsp; " -> 공백을 나타내는 특수 문자
        /*
        html에서는 여러 개의 공백이 있어도 하나의 공백으로만 인정함. 
        따라서 여러 칸을 띄워주고 싶다면, &nbsp;와 같은 특수문자의 도움을 받아야함
         */
        $mile += 10;
    }
    echo "--------------------";    
?>
```

***

## 3.5 for문

### 3.5.1 for문의 기본 구조

```php
<?php
// for문으로 1~10 정수 출력
   	for ($i=1; $i<=10; $i++) {
        echo $i."<br>";
    }
?>
```


* for(변수_초기화; 조건식; 변수_증감) {    
    문장1;   
    문장2;    
}    

### 3.5.2 for문으로 정수 합계 구하기

```php
<?php
// for문으로 1~10 정수 합계 출력
    $sum = 0;
   	for ($i=1; $i<=10; $i++) {
        $sum += $i; 
    }

    echo "1에서 10까지의 합계 : ".$sum;
?>
```

```php
<?php
// for문으로 3의 배수 합계 출력
    $sum = 0;
   	for ($i=1; $i<=100; $i++) {
        if ($i%3 == 0)  // i를 3으로 나눈 나머지가 0일 경우 = i가 3의 배수일 경우
            $sum += $i; 
    }

    echo "1에서 100까지 3의 배수 합계 : ".$sum;
?>
```

### 3.5.3 섭씨/화씨 환산표 만들기

> 화씨 = (섭씨 X 9/5) + 32

```php
<?php
// for문으로 섭씨/화씨 환산표 출력
    echo "-------------------<br>";
    echo "섭씨 화씨<br>";
    echo "-------------------<br>";

    for ($c=-10; $c<= 30; $c+=5) {
        $f = ($c * 9/5) + 32;       // $f : 화씨
        echo $c." &nbsp; ".$f."<br>";
    }
    echo "--------------------";    

    /* 
-------------------
섭씨 화씨
-------------------
-10   14
-5   23
0   32
5   41
10   50
15   59
20   68
25   77
30   86
--------------------
    */
?>
```

> <table> 태그를 이용하여 섭씨/화씨 환산표를 만드는 프로그램
> <table> </table>

>   > - <th> </th> : table head, 표의 제목
>   >- <tr> </tr> : table row, 표의 행(가로줄)
>   >- <td> </내용> : table data, 셀

>   > <table>태그와 함께 사용가능한 속성 : colspan, rowspan, border, width, height, cellpadding, cellsapcing 등

```php
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
```

> * <table> 태그와 함께 사용가능한 속성
>   > 1. colspan : column span, 셀을 합치는 개수 설정 (셀 병합)
>   > 2. rowspan : row span, 셀(세로줄)을 합치는 개수 설정
>   > 3. border : 테이블 경계선 굵기 지정
>   > 4. width, height (px, %) : 너비, 높이 지정
>   > 5. cellpadding : 셀과 경계선 사이의 여백
>   > 6. cellspacing : 셀과 셀 사이의 여백


* echo문을 한번만 사용하여 위의 섭씨/화씨 환산표를 출력하기

```php
<?php
// $string에 table을 저장하여 한 번에 출력

    $string = "";     // $string을 Null로 초기화

    $string .= "<table border='1'>";
    $string .= "<tr><th width='100'>섭씨</th><th width='100'>화씨</th>";

    for ($c=-10; $c<= 30; $c+=10) {
        $f = ($c * 9/5) + 32;       // $f : 화씨
        $string .= "<tr><th>$c</th><th>$f</th>";
    }
    $string .= "</table>"; 

    echo $string;     // echo문을 한 번만 사용하여 table을 출력 
?>
```

> 할당 연산자 .=는 문자열을 연결하여 다시 문자열에 저장하는 역할을 함

***

## 3.6 이중 for문

```php
<?php
// 이중 for문
    for ($i=1; $i<= 5; $i++) {
        echo $i."행 : ";
        for ($j=1; $j<=10; $j++) {
            echo $j." ";
        }
        echo "<br>";
    }
?>
```

### 3.6.1 구구단표 만들기

```php
<?php
// 이중 for문으로 구구단 출력
   for ($i=2; $i<=9; $i++) {
        echo $i."단 : ";
        for ($j=1; $j<=9; $j++) {
            $x = $i * $j;
            echo $i."x".$j."=".$x." ";
        }
        echo "<br>";
    }
?>
```

> 구구단을 표 형태로 출력하는 프로그램

```php
<?php
// 이중 for문으로 <table>태그 이용해 구구단표 출력
    $string = "";
    $string .= "<table border='1'>";
    for ($i=2; $i<=9; $i++) {
        $string .= "<tr>";
        for ($j=1; $j<=9; $j++) {
            $x = $i * $j;
            $string .= "<td>".$i."x".$j."=".$x."</td>";
        }
        $string .= "</tr>";
    }
    $string .= "</table>";

    echo $string;
?>
```

### 3.6.2 숫자로 삼각형 형태 출력하기

```php
<?php
// 숫자를 삼각형 형태로 출력
    for ($i=1; $i<=9; $i++) {
        for ($j=1; $j<=$i; $j++) {
            echo $i;
        }
        echo "<br>";
    }
?>
```

```php
<?php
// 숫자를 역삼각형 형태로 출력
    for ($i=9; $i>=1; $i--) {
        for ($j=1; $j<=$i; $j++) {
            echo $i;
        }
        echo "<br>";
    }
?>
```

### 3.6.3 별표(*)로 삼각형 형태 출력하기

```php
<?php
// *로 역삼각형 형태 출력
    for ($i=1; $i<=9; $i++) {
        for ($j=1; $j<=9-$i; $j++) {
            echo "&nbsp;";  // 공백을 나타내는 특수문자(&nbsp;)를 9-$i번 출력
        }
        for ($j=1; $j<=$i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
?>
```

***
***
***