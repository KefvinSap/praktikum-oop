<?php
class Product {
    protected string $name;
    protected float $price;

    public function __construct(string $name, float $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function getInfo(): string {
        return "Produk: $this->name, Harga: $this->price";
    }
}
