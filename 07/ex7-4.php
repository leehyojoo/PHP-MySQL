<?php
// 소멸자(Destructor)

    class Person {
        public $name;   // 속성

        // 생성자 함수
        public function __construct($name) {
            $this->name = $name;
        }

        // 소멸자 함수 __destruct()는 객체가 소멸, 즉 프로그램이 종료될 때 실행됨
        // 따라서 프로그램이 종료되면 echo문에 의해 '이름은 홍길동입니다.'가 출력
        public function __destruct() {  
            echo "이름은 ".$this->name."입니다.";
        }
    }

    $person1 = new Person("홍길동");
?>