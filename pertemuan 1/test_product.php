<?php
require_once "Book.php";
require_once "DVD.php";

$produk = [
    new Book("PHP for Beginners", 120000, "John Doe"),
    new DVD("Inception", 90000, 148)
];

foreach ($produk as $p) {
    echo $p->getInfo() . "\n";
}
