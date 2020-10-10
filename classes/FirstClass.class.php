<?php 
    // scope Resolution Operators (::)

class FirstClass {
    const EXAMPLE = "You can't change this!";

    public static $iAmAStaticProp = "iAmAStaticProp, yes, I am!";

    public static function test() {
        // a static function can be called even though no object is instantiated
        // also, we can have a static variables; they are not properties of the object!!!
        $testing = "This is a test!";
        return $testing;
    }
}