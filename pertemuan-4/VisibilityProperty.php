<?php 
class MyClass { 
 public string $pub = 'Public'; 
 protected string $prot = 'Protected'; 
 private string $priv = 'Private'; 
 public function dump(): void { 
 echo $this->pub . "\n"; 
 echo $this->prot . "\n"; 
 echo $this->priv . "\n"; 
 } 
} 
class MyChild extends MyClass { 
 public function check(): void { 
 echo $this->pub . "\n"; 
 echo $this->prot . "\n"; 
 // echo $this->priv; // ERROR 
 } 
} 

$child = new MyChild();
$child->check();

