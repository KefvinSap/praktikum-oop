<?php
class DieselEngine {
    public function start() {
        echo "Diesel engine started!<br>";
    }
}

class Car {
    private $engine;

    public function __construct() {
        // Car membuat engine secara langsung → TIGHT COUPLING
        $this->engine = new DieselEngine();
    }

    public function start() {
        $this->engine->start();
    }
}

$car = new Car();
$car->start();
?>
