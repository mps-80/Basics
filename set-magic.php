<?php
class Foo {
    private $pval = 1;

    public function __set($name, $val) {
        echo "Setting $name a $val \n<br/>";
        $this->$name = $val;
    }

    public function __get($val) {
        echo "Get $val \n<br/>";
        return $this->$val;
    }

    public function __isset($name) {
        echo "Is $name is set? \n<br/>";
        return isset($this->$name);
    }
}

$foo = new Foo();
echo "Value of pval is $foo->pval \n<br/>";
$foo->name = 2;

echo "Value of name is $foo->name \n<br/>";