<?php
class Foo {
    private $hidden = 3;

    public $non_hidden = 2;

    public function __get($val) {
        echo "Getting $val\n<br/>";
        return $this->$val;
    }
}

class Bar extends Foo {
    public function getVal() {
        echo "Printing hidden ". $this->hidden ."\n<br/>";
    }

    public function getNonVal() {
        echo "Printing non hidden ". $this->non_hidden ."\n<br/>";
    }
}

//Private variables are not accessible outside the class
//It is possible through __get method
//To test, comment the __get function

$foo = new Foo();
echo "Hidden is ". $foo->hidden . "\n<br/>";
echo "Non Hidden is ". $foo->non_hidden . "\n<br/>";

$bar = new Bar();
$bar->getVal();
$bar->getNonVal();