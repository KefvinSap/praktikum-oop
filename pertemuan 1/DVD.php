<?php
require_once "Product.php";

class DVD extends Product {
    private int $duration; // durasi menit

    public function __construct(string $name, float $price, int $duration) {
        parent::__construct($name, $price);
        $this->duration = $duration;
    }

    // Overriding method
    public function getInfo(): string {
        return "DVD: $this->name, Durasi: $this->duration menit, Harga: $this->price";
    }
}
