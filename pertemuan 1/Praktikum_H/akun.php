<?php
interface Engine {
    public function start();
}

class DieselEngine implements Engine {
    public function start() {
        echo "Diesel engine started!<br>";
    }
}

class ElectricEngine implements Engine {
    public function start() {
        echo "Electric engine started silently!<br>";
    }
}

class Car {
    private $engine;

    // Dependency Injection → LOOSE COUPLING
    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }

    public function start() {
        $this->engine->start();
    }
}

$dieselCar = new Car(new DieselEngine());
$dieselCar->start();

$electricCar = new Car(new ElectricEngine());
$electricCar->start();
?>
