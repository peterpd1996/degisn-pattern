<?php
// chỉ khởi tạo class 1 lần nếu nó tồn tại rồi thì k khởi tạo nữa
class Singleton {
    private static $instance;
    public static function getInstance() {
        if (self::$instance == null) {
            echo "khởi tạo" ."\n"; // chỉ khởi tạo một lần
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
}

$test1 = Singleton::getInstance();

$test2 = Singleton::getInstance();

if($test1 == $test2)
    echo "ok";
else
    echo "not ok";