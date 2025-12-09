<?php
class User {
    public function __construct(
        public string $name = "Guest",
        public int $age = 0
    ) {}
}

$u1 = new User();
$u2 = new User("Rani");
$u3 = new User("Budi", 25);  

echo $u1->name . "\n"; 
echo $u2->name . "\n";
echo $u3->name . " - " . $u3->age . "\n";
