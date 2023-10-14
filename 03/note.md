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
            문장B
            break;
    default :
            문장a;
            문장b;
}