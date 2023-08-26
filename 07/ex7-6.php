<?php
// 접근 제어자(Access Modifier)
/*
- public : 속성과 메소드가 어느 곳에서든 다 접근 가능
- protected : 속성과 메소드가 해당 클래스와 그 클래스를 상속받은 클래스 내에서만 접근 가능
- private : 속성과 메소드가 해당 클래스 내에서만 접근 가능
 */

 // public 접근 제어자의 사용

    class Member {
	    public $name;

	    public function getName() { 
		    return $this->name;
	    }
    }

    $mem = new Member();

    $mem->name = "홍길동";  // 외부에서도 접근 가능
    // $name 속성을 public으로 선언하였기 때문에 mem 객체의 $name 속성, 즉 $mem->name에 "홍길동"을 저장 가능
    echo "이름 : ".$mem->getName();
?>