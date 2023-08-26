<?php

class Admin {

    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;

    function __construct(int $id, string $firstName, string $lastName, string $email){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }    
}