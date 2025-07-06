<?php

class Foo {
    public function __call($name, $args) {
        echo "You have called $name method with '". implode(",", $args). "' as arguments <br/>";
    }

    public static function __callStatic($name, $args) {
        echo "You have called static $name method with '". implode(",", $args). "' as arguments <br/>";
    }
}

$foo = new Foo();
$foo->runWeb("Object");
$foo->runAjax("Params");

Foo::runApi("Consumer");