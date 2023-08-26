<?php
// 클래스와 객체의 사용 예

    // Person 클래스 정의
    /* public 형은 해당 속성을 객체 내부와 외부에서 모두 사용할 수 있게함 (public / protected / private) */
    class Person {
        public $name;      // 속성
        public $age;         // 속성
        public function intro() {           // intro() 메소드 : 클래스의 속성 $name과 $age를 화면에 출력하는 역할
            /* $this는 클래스 내부의 속성에 접근하기 위한 키워드 */
            echo "이름 : ".$this->name.", 나이 : ".$this->age;
        }
    }

    // 객체 생성
    $hong = new Person("");

    $hong->name = "홍길동";
    $hong->age = 20;

    $hong->intro();
?>