<?php 

class MathUtils {
    public static float $pi = 3.14159;

    public static function square(float $num): float {
        return $num * $num;
    }
}

//Expensive resources. Singleton
//late static binding
class Connection {
    private static $instance = null;
    private function __construct() {}

    public static function singleton() {
        if (null === static::$instance){
            static::$instance = new static();
        }
        return static::$instance;
    }
}

//without static
// $connection = new Connection();
// $connection->singleton();
$connection = Connection::singleton(); //with static

// var_dump(
//     MathUtils::$pi,
//     MathUtils::square(4)
// );
