# PART 1. PHP 기초
      
***  
***
***

## 1.1 PHP 개요
> PHP(Hypertext Preprocessor)
>   > 웹 서버 쪽의 데이터를 처리하는 데 주로 사용 
> PHP 해석기
>   > PHP 코드를 해석하여 HTML 코드로 변환, HTML로 변환된 웹 페이지는 인터넷을 통하여 사용자 컴퓨터의 웹 브라우저에 전달

## 1.2 PHP 기반의 웹 환경
> * 웹 서버  
>   > 서비스를 제공하는 컴퓨터
>   > HTTP 통신 규약에 의해 클라이언트의 웹 브라우저에 정보를 제공하는 원격에 위치한 컴퓨터 하드웨어(혹은 소프트웨어)를 의미

> * 웹 서버 구축 프로그램
>   > 서버 컴퓨터에 탑재되어 클라이언트에 웹 서비스를 제공하는 데 사용되는 소프트웨어
>   > Apache, PHP 해석기, MySQL이 웹 서버를 구축하는 프로그램으로 널리 사용

> * Apache
>   > 웹 서비스를 제공하는 데 사용되는 인기있는 웹 서버 프로그램 중 하나
>   > 안정성과 성능이 우수하여 유닉스, 윈도우, 리눅스 등의 운영체제에서 운용

> * PHP 해석기
>   > 프로그래머가 PHP 문법에 따라 작성한 프로그램 소스를 문법적으로 해석하는 프로그램
>   > 서버 컴퓨터에 탑재되어 PHP 소스 코드를 해석한 후 이를 Apache에 HTML 형태로 제공
>   > Apache는 해당 HTML 문서를 HTTP 통신 규약에 따라 클라이언트의 컴퓨터에 전송

> * MySQL
>   > 데이터베이스 관리 프로그램

## 1.3 XAMPP 프로그램
  
## 1.4 비쥬얼 스튜디오 코드 설치

## 1.5

```php
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<h2>PHP로 반복 출력하기</h2>
<?php
	$i=1;
	while($i<=5) {
		echo "안녕하세요.<br>";
		$i++;
	}
?> 
</h1>
</body>
</html>
```

***
***
***