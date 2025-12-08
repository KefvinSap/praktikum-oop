<?php 
class Counter {
    public static int $count = 0;     
    public const LABEL = "Jumlah objek"; 
 
    public function __construct() {         self::$count++;
    }
}
 
new Counter();
new Counter();
new Counter();

echo Counter::LABEL . ": " . Counter::$count;

public static function reset() {     self::$count = 0; 
} 
Counter::reset();
