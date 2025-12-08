<?php

class Validator {
    
    private $errors = [];

    public function checkTextLength($field, $value, $min, $max) {
        if (strlen($value) < $min || strlen($value) > $max) {
            $this->errors[$field] = "$field must be between $min and $max characters.";
        }
    }

    public function checkEmail($field, $value) {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field] = "$field is not a valid email.";
        }
    }

    public function fails() {
        return !empty($this->errors);
    }

    public function errors() {
        return $this->errors;
    }
}