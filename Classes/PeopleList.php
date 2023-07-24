<?php

namespace Classes;

abstract class Person
{
    protected $name;
    protected $surname;
    protected $age;
    protected $GPA;

    public function __construct(string $name, string $surname, int $age, float $GPA)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->surname = $age;
        $this->surname = $GPA;
    }   

    public function getFullname(): void {
        echo $this->name . ' ' . $this->surname;
    }

    public function __get() {

    }
    
    public function __set() {

    }

    public function __sleep() {

    }

    public function  __wakeup() {

    }
}
?>