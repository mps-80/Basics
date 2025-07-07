<?php
class A {
    public static function who() {
        echo "I am A <br/>";
    }

    public static function test() {
        self::who(); //Always A
        static::who(); //Depends on the call
    }
}

class B extends A {
    public static function who() {
        echo "I am B <br/>"; 
    }
}

B::who();
echo "=======<br/>";
A::test();
echo "=======<br/>";
B::test();