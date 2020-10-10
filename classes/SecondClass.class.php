<?php 
class SecondClass extends FirstClass {
    public static $staticProperty  = "A static prop!";

    public static function anotherTest()
    {
        echo parent::EXAMPLE;
        echo "<br>";
        echo self::$staticProperty;
    }
}
