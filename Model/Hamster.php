<?php

namespace hamsterDC;

class Hamster{

    public string $name;
    public int $age;
    public bool $female; // true if female, false if male
    
    public function __construct(string $name, int $age, bool $female){
        $this->name = $name;
        $this->age = $age;
        $this->female = $female;
        
    }
}

