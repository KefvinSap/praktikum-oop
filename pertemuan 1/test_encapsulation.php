<?php
require "Validator_Encapsulation.php";

$val = new ValidatorEncapsulation($_POST);

// Percobaan salah → harus error
$val->inputType = $_GET;  
