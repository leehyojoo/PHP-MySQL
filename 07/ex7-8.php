<?php
/* private 접근 제어자로 선언된 속성에 접근하기 위한 Setter/Getter 메소드 */
// Setter : 객체의 메소드에서 속성 값을 저장하는데 사용
// Getter : 값을 가져오는 데 사용

    class Member {
	    private $name;

        public function setName($name) {
		    $this->name = $name;
	    }
	    public function getName() {
		    return $this->name;
	    }
    }

    $mem = new Member();

    $mem->setName("김정호");  // Setter인 setName($name) 메소드는 private으로 선언된 $name 속성에 매개변수 $name의 값을 저장
    echo "이름 : ".$mem->getName();  // Getter인 getName() 메소드는 객체의 $name 속성 값을 가져옴
?>