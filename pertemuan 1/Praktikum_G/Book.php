<?php
require_once "Product.php";

class Book extends Product {
    private string $author;

    public function __construct(string $name, float $price, string $author) {
        parent::__construct($name, $price);
        $this->author = $author;
    }

    // Overriding method
    public function getInfo(): string {
        return "Buku: $this->name, Penulis: $this->author, Harga: $this->price";
    }
}
