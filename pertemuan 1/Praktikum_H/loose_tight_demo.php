<?php
echo "=== TIGHT COUPLING ===\n";

class DieselEngine {
    public function start() {
        echo "Diesel engine started!\n";
    }
}

class CarTight {
    private $engine;

    // Tight Coupling: membuat engine langsung di class
    public function __construct() {
        $this->engine = new DieselEngine();
    }

    public function start() {
        $this->engine->start();
    }
}

$car1 = new CarTight();
$car1->start();



// ==============================
// LOOSE COUPLING
// ==============================

echo "<br>=== LOOSE COUPLING ===\n";

interface Engine {
    public function start();
}

class DieselEngineLoose implements Engine {
    public function start() {
        echo "Diesel engine (loose) started!\n";
    }
}

class ElectricEngine implements Engine {
    public function start() {
        echo "Electric engine started silently!\n";
    }
}

class CarLoose {
    private $engine;

    // Dependency Injection
    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }

    public function start() {
        $this->engine->start();
    }
}

$carDiesel = new CarLoose(new DieselEngineLoose());
$carDiesel->start();

$carElectric = new CarLoose(new ElectricEngine());
$carElectric->start();
?>
