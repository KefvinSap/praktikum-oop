<?php

require "mobil.php";
require "motor.php";

$vehicles = [
    new Car(),
    new Motorcycle()
];

foreach ($vehicles as $v) {
    echo $v->accelerate() . "\n";
}