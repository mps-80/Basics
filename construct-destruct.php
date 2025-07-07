<?php

class Foo {
    protected $title;

    public function __construct($title) {
        $this->title = $title;
        echo "Called contructor\n<br/>";
    }

    public function print() {
        echo "Printing $this->title\n<br/>";
    }

    public function __destruct() {
        echo "Called destructor\n<br/>";
    }
}

$foo = new Foo("PHP Basics");
$foo->print();