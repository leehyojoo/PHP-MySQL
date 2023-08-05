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