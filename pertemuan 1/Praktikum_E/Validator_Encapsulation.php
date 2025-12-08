<?php

class ValidatorEncapsulation
{
    protected array $inputType;   // hanya class dan turunannya
    private array $rules = [];    // hanya class ini sendiri

    public function __construct(array $input)
    {
        $this->inputType = $input;
    }

    public function addRule(string $field, callable $cb)
    {
        $this->rules[$field] = $cb;
    }

    public function validate(): array
    {
        $errors = [];
        foreach ($this->rules as $field => $cb) {
            $value = $this->inputType[$field] ?? null;
            $result = $cb($value);
            if ($result !== true) $errors[] = $result;
        }
        return $errors;
    }
}
