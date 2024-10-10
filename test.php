<?php

echo "encapsulation";

class Login {
    private $password;

    public function get(){
        return $this->password;
    }

    public function set($_password){
         $this->password = $_password;
    }
}

$objlog = new Login();
 $objlog->set("dhiya");
 $res = $objlog->get();

echo "$res";


echo "traits";

trait t1{
    function fun1(){
        echo "trait : fun1";
    }
}

trait t2 {
    function fun2(){
        echo "trait 2 : fun 2";
    }
}

class Classtrait {
    use t1;
    function fun3(){
        echo "classtrait : fun3 ";
    }

}

class Classtrait4 extends Classtrait {
        function fun4(){
            echo "extended 4";
        }
}

class Classtrait5 extends Classtrait4 {
    function fun5(){
        echo "extended 4";
    }
}

$traitvar = new Classtrait4();

$traitvar->fun1();
