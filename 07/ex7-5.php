<?php
// 클래스의 상속(Inheritance) using "extends' keyword

    // Rectangle 클래스는 두 개의 속성, 생성자, 한 개의 메소드로 구성됨
    class Rectangle {
        public $width;
        public $height;
        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }
        public function getArea() {
            return ($this->width * $this->height);
        }         
    }

    // Square 클래스는 Rectangle 클래스의 모든 자산을 물려받음
    class Square extends Rectangle {   
        public function isSquare() {
            if($this->width == $this->height) {    
                    return true; // 정사각형인 경우
            } 
            else{
                    return false; // 정사각형이 아닌 경우
            }
        }
    }    

    $rect = new Square(10, 10);  // Square(10,10)을 이용해 $rect 객체 생성

    if ($rect->isSquare())
        echo "정사각형의 넓이 : ";
    else
        echo "직사각형의 넓이 : ";

    echo $rect->getArea();
?>