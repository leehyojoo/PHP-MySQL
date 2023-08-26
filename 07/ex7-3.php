<?php
// 생성자(Constructor)

    // Triangle 클래스 정의
    // 두 개의 속성 ($width, $height)과 생성자 함수(__construct), 한 개의 getArea() 메소드로 구성
    class Triangle {
        public $width;   // 속성
        public $height;  // 속성

        // 생성자 함수
        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }

        // getArea() 메소드
        public function getArea() {
            $area = $this->width * $this->height * 0.5;
            return $area;
        } 
    }

    $tri1 = new Triangle(10, 5); // Triangle 클래스에 인수가 존재하면 생성자 함수(__construct())가 실행됨
    echo "삼각형의 넓이 : ".$tri1->getArea();
?>