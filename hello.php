<?php
echo "Hello,hgjkh World!";
?>
<?php 
// inheritance
class Class1 {
    public $x;

    public function __construct() {
        $this->x = 10;
        echo "construct\n";
    }

    public function sum() {
        $y = $this->x + 10;
        echo "Sum: $y\n";
    }

    public function __destruct() {
        echo "destructor\n";
    }
}

// $obj1 = new Class1();
// $obj1->sum();

class Class2 extends Class1 {
    public function sum() {
   
        echo " Class2\n";
    }

    public function __destruct() {
        echo "destructor\n";
    }
}

$obj2 = new Class2();
$obj2->sum();

// abstract class
abstract class Class3 {

    abstract function id();
}

class Class4 extends Class3{
    function id(){
        echo "id is there";
    }
}

$obj3 = new Class4();
$obj3->id();

include('test.php');





