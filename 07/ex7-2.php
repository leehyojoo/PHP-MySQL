<?php
// 객체지향 방식으로 사각형의 둘레 길이와 넓이 구하기

    // Rectangle 클래스 정의 
    class Rectangle {
        public $width;    // 속성
        public $height;   // 속성

        public function getLength() {     // 메소드
            return ($this->width*2 + $this->height*2);
        } 
        public function getArea() {        // 메소드
            return ($this->width * $this->height);
        }         
    }

    $rect1 = new Rectangle(20, 10);   // Rectangle class로부터 새로운 객체 $rect1 생성

    $rect1->width = 20;
    $rect1->height = 10;

    echo "너비 : ".$rect1->width."<br>";
    echo "높이 : ".$rect1->height."<br>";
    echo "사각형 둘레 길이 : ".$rect1->getLength()."<br>";     // getLength() 메소드 호출
    echo "사각형 넓이 : ".$rect1->getArea();   // getArea() 메소드 호출
?>