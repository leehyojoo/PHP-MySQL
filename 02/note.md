# PART 2. 데이터 형과 연산자
      
***  
***
***

## 2.1 PHP 기본 문법

### 2.1.1 PHP의 시작과 끝
```php
<?php
	echo "안녕하세요.<br>";
	echo "반갑습니다.";

	/*

	 <?php  ?>
	 echo - 출력 
	 <br> - 줄바꿈

	*/
?>
```
> * <?php     ?>
>   > '<?php'는 PHP 코드의 시작을 의미, '?>'는 PHP 코드의 끝을 의미

> * echo
>   > echo는 따옴표 안에 있는 문자열을 화면에 출력하는 기능

> * <br>
>   > HTML에서 줄바꿈을 나타내는 태그

### 2.1.2 주석문
 ```php
 <?php
/*  
    작성자 : 이효주
    작성일 : 2023.08.04
*/
        
	echo "안녕하세요.<br>";     // echo문은 따옴표(") 안에 있는 내용 출력
	echo "반갑습니다.";
?>
 ```

### 2.1.3 echo문
```php
<?php      
	echo "<h2>PHP 공부</h2>";
	echo "쉽다!<br>"; 
    echo "재미있다!<br>";
    echo "<img src='img/logo.png' width='100'>";
?>
```

> echo는 따옴표 안에 있는 내용을 브라우저 화면에 출력하는 역할
> <h2>와 같은 HTML 태그가 포함될 수 있음
> 쌍 따옴표 안에서 따옴표를 사용해야 할 경우, 쌍 따옴표 앞에 역슬래쉬(\)를 사용하거나 단 따옴표 사용
>   > 쌍 따옴표 안에 쌍 따옴표를 사용하면 오류 발생

***

## 2.2 변수
> * 변수
>   > 변수는 컴퓨터에 데이터가 저장되는 메모리의 주소, 즉 위치를 의미
>   > 영문, 숫자, 밑줄로 구성된 이름 앞에 $를 붙여 변수 생성
>   > * 잘못된 변수명
>   >   > 한글은 변수명에 사용하지 않음
>   >   > 변수명은 숫자로 시작할 수 없음
>   >   > 공백은 변수명에 사용할 수 없음
>   >   > 하이픈(-)은 빼기 기호에 사용되므로 변수명에 사용하지 않음
>   >   > @, #, %, ^, &, *, / 등의 특수 문자는 변수명에 사용할 수 없음

```php
<?php      
    $a = 10;
    $b = 20;

    $c = $a + $b;

    echo $c;
?>
```

## 2.3
```php
<?php      
    $kor = 80;
    $eng = 90;
    $math = 100;

    $sum = $kor + $eng + $math;
    $avg = $sum/3;
    
    echo "국어 : $kor<br>";
    echo "영어 : $eng<br>";
    echo "수학 : $math<br>";
    echo "- 합계 : $sum<br>";
    echo "- 평균 : $avg<br>";

    // echo문 안에 사용된 변수 
    // echo문의 따옴표 안에 $kor, $eng, $math, $sum, $avg 등과 같은 변수가 위치하면 해당 변수의 값 출력
?>
```

```php
<?php      
    $pay = 5000;        // 지불 금액
    $price = 1000;      // 물건 가격
    $num = 3;        // 구매 개수
    
    $change = $pay - $price * $num;     // 거스름돈

    echo "지불 금액 : $pay<br>";
    echo "물건 가격 : $price<br>";
    echo "구매 개수 : $num<br>";
    echo "- 거스름돈 : $change<br>";
?>
```

## 2.4 데이터 형
> 정수
> 실수
> 문자열
> 불
> 배열
> 객체
> 널
> 리소스

### 2.4.1 정수(Integer)
```php
<?php      
    $a = 15;        // 정수
    var_dump($a);    // int(15)로 출력

    // var_dump($data) : 변수의 데이터 형과 값을 출력
?>
```

### 2.4.2 실수(Float)
```php
<?php      
    $a = -122.358;        // 실수
    var_dump($a);
?>
```

### 2.4.3 문자열(String)
```php
<?php      
    $x = 'apple';          // 문자열
    $y = "사과";         // 문자열

    var_dump($x);    // string(5) "apple" 
    echo "<br>";
    var_dump($y);   // string(6) "사과" 

    /*  한글 표준 문자셋인 UTF-8에서는 한글 한 글자는 3바이트로 표현됨  */
?>
```

### 2.4.4 불(Bool)
> True 또는 False 두 값으로 구성됨

```php
<?php      
    $x = 5 > 3;        // true
    $y = 5 < 3;        // false
    var_dump($x);   // bool(true)
    echo "<br>";
    var_dump($y);  // bool(flase)
?>
```

### 2.4.5 배열(Array)
```php
<?php 
    $x = array("빨강", "노랑", "파랑");  // 3개의 요소를 가진 배열, array()로 배열 생성
    var_dump($x);

    /*
    array(3) { [0]=> string(6) "빨강" [1]=> string(6) "노랑" [2]=> string(6) "파랑" }
    */
?>
```

### 2.4.6 객체(Object)
> 객체지향 프로그래밍 기법에서 사용되는 데이터형
> 객체지향 프로그래밍(OOP)에서는 객체와 클래스를 중심으로 프로그램 작성

```php
<?php      
// 객체지향 프로그래밍

    // class 생성
    class Hello {
        public $name = "홍길동";        // 프로퍼티(Property)

        function say_hello() {          // 메소드(Method)
            return $this->name."님 안녕하세요.";
        }
    }

    // 객체 생성
    $message = new Hello();
    echo $message->say_hello();
    echo "<br>";

    var_dump($message);        // object(Hello)#1 (1) { ["name"]=> string(9) "홍길동" }
?>
```

### 2.4.7 널(Null)
> 널 데이터 형은 값이 없는 상태

```php
<?php
    $x = NULL;    
    var_dump($x);    // NULL
?>
```

### 2.4.8 리소스(Resoucre)
> PHP에서 특수한 형태의 데이터
> 파일이나 데이터베이스를 다룰 때 많이 사용됨

```php
<?php
    $file = fopen("test.txt", "r");
    var_dump($file);  // resource(3) of type (stream)
?>
```

***

## 2.5 연산자

### 2.5.1 산술 연산자(Arithmetic Operator)
> +-*/
> %
> ++
> --

```php
<?php      
// 산술연산자 (Arithmetic Operator)
    $a = 17;
    $b = $a % 10;
    echo $b;
    echo "<br>";

    $b = $b % 3;
    echo $b;
    echo "<br>";

    $c = 2 % 5;
    echo $c;
?>
```
### 2.5.2 문자열 연결 연산자(String Concatenation Operator)
> * .
>   > 문자열 연결

```php
<?php      
// 문자열 연결 연산자 " . "
    $name = "이효주";
    echo $name."님 안녕하세요.<br>";

    $x = "토끼";
    $y = "거북이";
    $z = $x."와 ".$y;

    echo $z;
?>
```

### 2.5.3 할당 연산자
> =, +=, -=, *=, /=, %=
> .=

```php
<?php
// 할당 연산자 -> 컴퓨터 메모리에 값을 할당하는 역할

  	$a = 5;	          	  // $a 에 5 값을 대입	
    echo $a."<br>";    // $a."<br>" -> a와 줄바꿈 함께 출력
   	
	$a += 3;                  // $a = $a + 3 와 동일
    echo $a."<br>";
  
	$a -= 4;                  // $a = $a - 4 와 동일
    echo $a."<br>";

   	$a *= 2;                  // $a = $a * 2 와 동일
    echo $a."<br>";
   
	$a /= 4;                  // $a = $a / 4 와 동일
    echo $a."<br>";
   
	$a %= 2;                  // $a = $a % 2 와 동일
    echo $a."<br>";

   	$a = "오렌지";
   	$a .= " 주스";            // $a = $a." 주스" 와 동일
	echo $a."<br>";		  
?>
```

### 2.5.4 비교 연산자(Comparison Operator)
> 참/거짓을 판별할 때 주로 사용

### 2.5.5 논리 연산자(Logical Operator)
> and, or, &&, ||, |

***
***
***