<?php
// private 접근 제어자의 사용

    class Member {
	    private $name;  // $name 속성에 private 접근 제어자 사용
        /* private 접근 제어자로 선언된 속성과 메소드는 클래스 내부에만 사용 가능하고 외부에서는 접근 불가  */

	    public function getName() {
		    return $this->name;
	    }
    }

    $mem = new Member();

    $mem->name = "홍길동";  // 접근 오류 발생
    echo "이름 : ".$mem->getName();
?>